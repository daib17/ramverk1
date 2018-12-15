<?php

namespace daib17\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the GeoJsonController.
 */
class GeoJsonControllerTest extends TestCase
{
    /**
     * Test the route "index" with valid IP
     */
    public function testIndexActionGet()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global IP address and run test
        $di->get("request")->setGlobals([
            'get' => [
                'ip' => "172.217.168.164",
                'locateBtn' => 'locate'
            ]
        ]);

        // Setup the controller
        $controller = new GeoJsonController();
        $controller->setDI($di);

        $res = $controller->indexActionGet();
        $body = $res->getBody();
        $exp = "<title>Geolocation | ramverk1</title>";
        $this->assertContains($exp, $body);
    }



    /**
     * Test the route "index" with invalid IP
     */
    public function testIndexActionGetBadIP()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global IP address and run test
        $di->get("request")->setGlobals([
            'get' => [
                'ip' => "666.217.168.164",
                'locateBtn' => 'locate'
            ]
        ]);

        // Setup the controller
        $controller = new GeoJsonController();
        $controller->setDI($di);

        $res = $controller->indexActionGet();
        $body = $res->getBody();
        $exp = "<title>Geolocation | ramverk1</title>";
        $this->assertContains($exp, $body);
    }


    /**
     * Test the route "index" with no IP
     */
    public function testIndexActionGetNoIP()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Setup the controller
        $controller = new GeoJsonController();
        $controller->setDI($di);

        $res = $controller->indexActionGet();
        $body = $res->getBody();
        $exp = "<title>Geolocation | ramverk1</title>";
        $this->assertContains($exp, $body);
    }
}
