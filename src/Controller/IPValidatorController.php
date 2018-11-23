<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
* IP validator controller
*
* @SuppressWarnings(PHPMD.TooManyPublicMethods)
*/
class IPValidatorController implements ContainerInjectableInterface
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
        $title = "IP Validator";
        $page = $this->di->get("page");
        $ipadd = $this->di->get("request")->getPost("ip");
        $msg = " is not a valid IP address.";
        $host = null;

        if ($ipadd) {
            $isIPv4 = filter_var($ipadd, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
            $isIPv6 = filter_var($ipadd, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
            if ($isIPv4) {
                $msg = " is a valid IPv4 address.";
                $host = gethostbyaddr($isIPv4);
                $host = $host != $ipadd ? $host : null;
            } else if ($isIPv6) {
                $msg = " is a valid IPv6 address.";
                $host = gethostbyaddr($isIPv6);
                $host = $host != $ipadd ? $host : null;
            }
            $page->add("anax/ipvalidator/result", [
                "ip" => $ipadd,
                "msg" => $msg,
                "host" => $host
            ]);
        } else {
            $page->add("anax/ipvalidator/index", [
                "ip" => $ipadd,
            ]);
        }

        return $page->render([
            "title" => $title,
        ]);
    }
}
