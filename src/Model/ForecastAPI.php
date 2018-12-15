<?php

namespace daib17\Model;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

class ForecastAPI implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    /**
    * @var string  $curl custom cURL
    * @var string  $lat latitude
    * @var string  $lon longitude
    */
    private $lat;
    private $lon;
    private $curl;


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
        if ($period == 0) {
            // This week
            $res = $this->curl->request('https://api.darksky.net/forecast/' .
            $this->getApiKey() . '/' . $this->lat . ',' . $this->lon . '?units=si');
        } else {
            // Last 30 days
            $res = $this->multi(30);
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
        $urlArr = [];
        for ($i = 1; $i < $numDays + 1; $i++) {
            $time = date(strtotime("-" . $i . " days", time()));
            $urlArr[] = 'https://api.darksky.net/forecast/' .
                $this->getApiKey() . '/' . $this->lat . ',' . $this->lon . ',' . $time . '?units=auto';
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


    /**
    * Get API access key from configuration file.
    */
    public function getApiKey()
    {
        $cfg = $this->di->get("configuration");
        $config = $cfg->load("apikeys.php");
        return $config["config"]["darksky"];
    }
}
