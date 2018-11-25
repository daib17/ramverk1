<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

use Anax\Model\IPStackAPI;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
 * JSON controller.
 */
class GeoJsonController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    /**
     * This is the index method action, it handles:
     * GET METHOD mountpoint
     * GET METHOD mountpoint/
     * GET METHOD mountpoint/index
     *
     * @return object
     */
    public function indexActionGet() : object
    {
        $title = "Geolocation";
        $page = $this->di->get("page");
        $locateBtn = $this->di->get("request")->getGet("locateBtn");
        $ipJson = $this->di->get("request")->getGet("ip");
        $ipadd = "";

        // Client's IP as default for input field
        if (!$ipJson) {
            $ipadd = $ipJson =  $this->di->get("request")->getServer('REMOTE_ADDR');
        }

        $path = "index";
        $res = $json = $msg = $msgJson = "";

        if ($locateBtn) {
            $api = new IPStackAPI($ipJson);
            if ($api->isValid($ipJson)) {
                $path ="result-json";
                $res = $api->request();
                $json = [
                    "ipJson" => $ipJson,
                    "type" => $res["type"],
                    "city" => $res["city"],
                    "country_name" => $res["country_name"],
                    "latitude" => $res["latitude"],
                    "longitude" => $res["longitude"]
                ];
            } else {
                $msgJson = $ipJson . " is not a valid IP address";
            }
        }

        $page->add("anax/geolocation/$path", [
            "ip" => $ipadd,
            "ipJson" => $ipJson,
            "json" => $json,
            "msg" => $msg,
            "msgJson" => $msgJson
        ]);

        return $page->render([
            "title" => $title,
        ]);
    }
}
