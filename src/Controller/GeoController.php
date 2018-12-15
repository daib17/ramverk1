<?php

namespace daib17\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

use daib17\Model\IPStackAPI;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
* Geolocation controller
*
* @SuppressWarnings(PHPMD.TooManyPublicMethods)
*/
class GeoController implements ContainerInjectableInterface
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
        $title = "Geolocation";
        $page = $this->di->get("page");
        $locateBtn = $this->di->get("request")->getPost("locateBtn");
        $ipadd = $this->di->get("request")->getPost("ip");
        $ipJson = "";

        // Client's IP as default for input field
        if (!$ipadd) {
            $ipadd = $ipJson =  $this->di->get("request")->getServer('REMOTE_ADDR');
        }

        $route = "index";
        $res = $msg = $msgJson = "";

        if ($locateBtn) {
            $api = new IPStackAPI($ipadd);
            $api->setDI($this->di);
            if ($api->isValid($ipadd)) {
                $route = "result";
                $res = $api->request();
            } else {
                $msg = $ipadd . " is not a valid IP address";
            }
        }

        $page->add("anax/geolocation/$route", [
            "ip" => $ipadd,
            "ipJson" => $ipJson,
            "res" => $res,
            "msg" => $msg,
            "msgJson" => $msgJson
        ]);

        return $page->render([
            "title" => $title,
        ]);
    }
}
