<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the ForecastController.
 */
class ForecastJsonControllerTest extends TestCase
{
    /**
     * Test the route "index" with valid IP
     */
    public function testIndexAction()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global IP address and run test
        $di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'ip' => "172.217.168.164",
                'period' => 0
            ]
        ]);

        // Setup the controller
        $controller = new ForecastJsonController();
        $controller->setDI($di);

        $res = $controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }



    /**
     * Test the route "index" with no IP
     */
    public function testIndexActionNoIP()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global IP address and run test
        $di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'period' => 0
            ]
        ]);

        // Setup the controller
        $controller = new ForecastJsonController();
        $controller->setDI($di);

        $res = $controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }


    /**
     * Test the route "index" with bad IP
     */
    public function testIndexActionBadIP()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global IP address and run test
        $di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'ip' => "172.217.168",
                'period' => 0
            ]
        ]);

        // Setup the controller
        $controller = new ForecastJsonController();
        $controller->setDI($di);

        $res = $controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }



    /**
     * Test the route "index" with no latitude and longitude
     */
    public function testIndexActionLatLon()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global IP address and run test
        $di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'lat' => '28.05',
                'lon' => '-16.71',
                'period' => 0
            ]
        ]);

        // Setup the controller
        $controller = new ForecastJsonController();
        $controller->setDI($di);

        $res = $controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }
}
