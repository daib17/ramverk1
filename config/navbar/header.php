<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning/kmom01",
            "title" => "Redovisningstexter från kursmomenten",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats",
        ],
        [
            "text" => "IP-val",
            "url" => "ip",
            "title" => "IP validator",
        ],
        [
            "text" => "Geo",
            "url" => "geo",
            "title" => "Geo",
        ],
        [
            "text" => "Forecast",
            "url" => "forecast",
            "title" => "Forecast",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Standard output",
                        "url" => "forecast",
                        "title" => "Request weather forecast.",
                    ],
                    [
                        "text" => "JSON output",
                        "url" => "json/forecast",
                        "title" => "Request weather forecast (JSON).",
                    ],
                ],
            ],
        ],
        [
            "text" => "REST API",
            "url" => "rest-documentation",
            "title" => "API Documentation",
        ],
        // [
        //     "text" => "Styleväljare",
        //     "url" => "style",
        //     "title" => "Välj stylesheet.",
        // ],
        // [
        //     "text" => "Verktyg",
        //     "url" => "verktyg",
        //     "title" => "Verktyg och möjligheter för utveckling.",
        // ],
    ],
];
