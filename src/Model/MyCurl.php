<?php

namespace daib17\Model;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

/**
* cURL class wrapper
*/
class MyCurl implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    /**
    * Make API request
    */
    public function request($url)
    {
        // Initialize curl
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Store the data
        $json = curl_exec($curl);
        curl_close($curl);

        // Decode JSON response
        $res = json_decode($json, true);

        return $res;
    }


    /**
    * Multiple concurrent requests using curl_multi* functions.
    *
    * @param array $multiCurl array of requests
    *
    * @return array Array containing results from multiple requests
    */
    public function multi($urlArr)
    {
        $multiCurl = [];
        $result = [];
        $mhandle = curl_multi_init();    // multiple handle
        foreach ($urlArr as $i => $url) {
            $multiCurl[$i] = curl_init();
            curl_setopt($multiCurl[$i], CURLOPT_URL, $url);
            curl_setopt($multiCurl[$i], CURLOPT_HEADER, 0);
            curl_setopt($multiCurl[$i], CURLOPT_RETURNTRANSFER, 1);
            curl_multi_add_handle($mhandle, $multiCurl[$i]);
        }

        $index = null;
        do {
            curl_multi_exec($mhandle, $index);
        } while ($index > 0);

        // Get content and remove handles
        foreach ($multiCurl as $k => $ch) {
            $result[$k] = json_decode(curl_multi_getcontent($ch), true);
            curl_multi_remove_handle($mhandle, $ch);
        }
        // close
        curl_multi_close($mhandle);

        return $result;
    }
}
