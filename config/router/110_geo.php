<?php
/**
 * Load the IPValidatorController as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "Geolocation.",
            "mount" => "geo",
            "handler" => "\Anax\Controller\GeoController",
        ],
        [
            "info" => "Geolocation REST API.",
            "mount" => "json/geo",
            "handler" => "\Anax\Controller\GeoJsonController",
        ],
    ]
];
