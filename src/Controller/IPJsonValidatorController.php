<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
 * A sample JSON controller to show how a controller class can be implemented.
 * The controller will be injected with $di if implementing the interface
 * ContainerInjectableInterface, like this sample class does.
 * The controller is mounted on a particular route and can then handle all
 * requests for that mount point.
 */
class IPJsonValidatorController implements ContainerInjectableInterface
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
        $title = "IP Validator";
        $page = $this->di->get("page");
        $ipadd = $this->di->get("request")->getGet("ip");
        $msg = $ipadd . " is not a valid IP address.";
        $host = null;

        if ($ipadd) {
            $isIPv4 = filter_var($ipadd, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
            $isIPv6 = filter_var($ipadd, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
            if ($isIPv4) {
                $msg = $ipadd . " is a valid IPv4 address.";
                $host = gethostbyaddr($isIPv4);
                $host = $host != $ipadd ? $host : null;
            } else if ($isIPv6) {
                $msg = $ipadd . " is a valid IPv6 address.";
                $host = gethostbyaddr($isIPv6);
                $host = $host != $ipadd ? $host : null;
            }
        }

        $json = [
            "ip" => $ipadd,
            "message" => $msg,
            "host" => $host
        ];

        $page->add("anax/ipvalidator/result-json", [
            "json" => $json
        ]);

        return $page->render([
            "title" => $title,
        ]);
    }
}
