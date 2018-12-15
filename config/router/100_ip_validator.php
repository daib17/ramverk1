<?php
/**
 * Load the IPValidatorController as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "IP validator.",
            "mount" => "ip",
            "handler" => "\daib17\Controller\IPValidatorController",
        ],
        [
            "info" => "IP/JSON validator.",
            "mount" => "api/json",
            "handler" => "\daib17\Controller\IPJsonValidatorController",
        ],
    ]
];
