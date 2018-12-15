<?php
/**
 * Configuration file to create MyCurl as $di service.
 */
return [

    // Services to add to the container.
    "services" => [
        "mycurl" => [
            "shared" => true,
            //"callback" => "\Anax\Response\Response",
            "callback" => function () {
                $obj = new \daib17\Model\MyCurl();
                $obj->setDI($this);
                return $obj;
            }
        ],
    ],
];
