<?php
/**
 * Load the IPValidatorController as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "Forecast.",
            "mount" => "forecast",
            "handler" => "\Anax\Controller\ForecastController",
        ],
        // [
        //     "info" => "Geolocation REST API.",
        //     "mount" => "json/geo",
        //     "handler" => "\Anax\Controller\GeoJsonController",
        // ],
    ]
];
