<?php

namespace Anax\Model;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

class ForecastAPI implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    // /**
    // * Constant - Dark Sky free access key.
    // */
    // const KEY = '705b58d9ae70c6daa603f5b55b75da59';

    /**
    * @var string  $curl custom cURL
    * @var string  $lat latitude
    * @var string  $lon longitude
    * @var string  $apikey api access key
    */
    private $lat;
    private $lon;
    private $curl;
    private $apikey;

    /**
    * Constructor
    */
    public function __construct($curl, $lat, $lon)
    {
        $this->curl = $curl;
        $this->lat = $lat;
        $this->lon = $lon;
    }

    /**
    * Make API request for the given period.
    *
    * @param string $period 0: this week, 1: last 30 days
    */
    public function request($period)
    {
        // Get API access key from configuration file
        $cfg = $this->di->get("configuration");
        $config = $cfg->load("apikeys.php");
        $this->apikey = $config["config"]["darksky"];

        if ($period == 0) {
            // This week
            $res = $this->curl->request('https://api.darksky.net/forecast/' .
            $this->apikey . '/' . $this->lat . ',' . $this->lon . '?units=si');
        } else {
            // Last 30 days
            $res = $this->multi(3);
        }

        return $res;
    }



    /**
    * Multiple concurrent requests for the number of given days in the past.
    *
    * @param int $numDays number of days
    *
    * @return array Array containing results from multiple requests
    */
    public function multi($numDays)
    {
        // Get API access key from configuration file
        $cfg = $this->di->get("configuration");
        $config = $cfg->load("apikeys.php");
        $this->apikey = $config["config"]["darksky"];

        $urlArr = [];
        for ($i = 1; $i < $numDays + 1; $i++) {
            $time = date(strtotime("-" . $i . " days", time()));
            $urlArr[] = 'https://api.darksky.net/forecast/' .
                $this->apikey . '/' . $this->lat . ',' . $this->lon . ',' . $time . '?units=auto';
        }

        return $this->curl->multi($urlArr);
    }


    /**
    * Check whether Latitude and Longitude are valid.
    *
    * @return boolean true if valid, false otherwise
    */
    public function isValid()
    {
        return $this->lat >= -90 && $this->lat <= 90 &&
            $this->lon >= -180 && $this->lon <= 180;
    }
}
