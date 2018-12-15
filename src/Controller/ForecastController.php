<?php

namespace daib17\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

use daib17\Model\IPStackAPI;
use daib17\Model\ForecastAPI;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
* Forecast controller
*
* @SuppressWarnings(PHPMD.TooManyPublicMethods)
*/
class ForecastController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    /**
    * This is the index method action, it handles:
    * ANY METHOD mountpoint
    * ANY METHOD mountpoint/
    * ANY METHOD mountpoint/index
    *
    * @return object
    */
    public function indexAction() : object
    {
        $title = "Forecast";
        $page = $this->di->get("page");
        $submitBtn = $this->di->get("request")->getPost("submitBtn");
        $lat = $this->di->get("request")->getPost("lat");
        $lon = $this->di->get("request")->getPost("lon");
        $ipadd = $this->di->get("request")->getPost("ip");
        $period = $this->di->get("request")->getPost("period");

        // cURL wrapper to inject in ForecastAPI
        $curl = $this->di->get("mycurl");

        // Client's IP as default for input field
        if (!$ipadd) {
            $ipadd = $this->di->get("request")->getServer('REMOTE_ADDR');
        }

        $route = "index";
        $res = $msg = "";

        if ($submitBtn) {
            if ($lat && $lon) {
                $forecastApi = new ForecastAPI($curl, $lat, $lon);
                $forecastApi->setDI($this->di);
                if ($forecastApi->isValid()) {
                    $res = $forecastApi->request($period);
                    $route = $period == 0 ? "result" : "result-past";
                } else {
                    $msg = "Latitude and/or longitude are not valid";
                }
            } else {
                $ipstackApi = new IPStackAPI($ipadd);
                $ipstackApi->setDI($this->di);
                if ($ipstackApi->isValid($ipadd)) {
                    $res = $ipstackApi->request();
                    $forecastApi = new ForecastAPI(
                        $curl,
                        $res["latitude"],
                        $res["longitude"]
                    );
                    $forecastApi->setDI($this->di);
                    $res = $forecastApi->request($period);
                    $route = $period == 0 ? "result" : "result-past";
                } else {
                    $msg = $ipadd . " is not a valid IP address";
                }
            }
        }

        $page->add("anax/forecast/$route", [
            "ip" => $ipadd,
            "lat" => $lat,
            "lon" => $lon,
            "res" => $res,
            "msg" => $msg
        ]);

        return $page->render([
            "title" => $title,
        ]);
    }
}
