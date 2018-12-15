<?php
/**
 * Load the IPValidatorController as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "Geolocation.",
            "mount" => "geo",
            "handler" => "\daib17\Controller\GeoController",
        ],
        [
            "info" => "Geolocation REST API.",
            "mount" => "json/geo",
            "handler" => "\daib17\Controller\GeoJsonController",
        ],
    ]
];
