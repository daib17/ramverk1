<?php
/**
 * Load the IPValidatorController as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "Wheater Forecast",
            "mount" => "forecast",
            "handler" => "\daib17\Controller\ForecastController",
        ],
        [
            "info" => "Wheater Forecast (JSON)",
            "mount" => "json/forecast",
            "handler" => "\daib17\Controller\ForecastJsonController",
        ],
    ]
];
