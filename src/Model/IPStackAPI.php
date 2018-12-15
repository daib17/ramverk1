<?php

namespace daib17\Model;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

class IPStackAPI implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    /**
    * @var string  $ip IP address to locate.
    */
    private $ipadd;


    /**
    * Constructor
    */
    public function __construct($ipadd)
    {
        $this->ipadd = $ipadd;
    }


    /**
    * Make API request with instance variable 'ipadd' and access key.
    */
    public function request()
    {
        // Get API key from configuration file
        $cfg = $this->di->get("configuration");
        $config = $cfg->load("apikeys.php");
        $apikey = $config["config"]["ipstack"];

        // Initialize curl
        $curl = curl_init('http://api.ipstack.com/' . $this->ipadd . '?access_key='. $apikey . '');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Store the data
        $json = curl_exec($curl);
        curl_close($curl);

        // Decode JSON response
        $res = json_decode($json, true);

        return $res;
    }


    /**
    * Validate IP
    *
    * @return boolean true if valid IP, false otherwise
    */
    public function isValid($ipadd)
    {
        // Validate IP
        $isIPv4 = filter_var($ipadd, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
        $isIPv6 = filter_var($ipadd, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
        return ($isIPv4 || $isIPv6) ? true : false;
    }
}
