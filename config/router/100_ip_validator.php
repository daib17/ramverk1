<?php
/**
 * Load the IPValidatorController as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "IP validator.",
            "mount" => "ip",
            "handler" => "\Anax\Controller\IPValidatorController",
        ],
        [
            "info" => "IP/JSON validator.",
            "mount" => "api/json",
            "handler" => "\Anax\Controller\IPJsonValidatorController",
        ],
    ]
];
