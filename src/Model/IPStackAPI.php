<?php

namespace Anax\Model;

class IPStackAPI
{
    /**
    * Constant - IPStackAPI free access key.
    */
    private const ACCESS_KEY = '03a38350318f8afa3cc5dcd5ee6bd323';

    /**
    * @var string  $ip IP address to locate.
    */
    private $ip;

    /**
    * Constructor
    */
    public function __construct($ip) {
        $this->ip = $ip;
    }

    /**
    * Make API request with instance variable 'ip' and access key.
    */
    public function request() {
        $access_key = '03a38350318f8afa3cc5dcd5ee6bd323';

        // Initialize curl
        $ch = curl_init('http://api.ipstack.com/'.$this->ip.'?access_key='.self::ACCESS_KEY.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response
        $res = json_decode($json, true);

        return $res;
    }

    /**
    * Validate IP
    *
    * @return boolean true if valid IP, false otherwise
    */
    public function isValid($ip) {
        // Validate IP
        $isIPv4 = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
        $isIPv6 = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
        return ($isIPv4 || $isIPv6) ? true : false;
    }
}
