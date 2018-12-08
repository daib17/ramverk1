<?php
/**
 * Load the IPValidatorController as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "Wheater Forecast",
            "mount" => "forecast",
            "handler" => "\Anax\Controller\ForecastController",
        ],
        [
            "info" => "Wheater Forecast (JSON)",
            "mount" => "json/forecast",
            "handler" => "\Anax\Controller\ForecastJsonController",
        ],
    ]
];
