<?php

namespace daib17\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
* Test the ForecastController.
*/
class ForecastControllerTest extends TestCase
{
    /**
    * @var Anax\DI\DIFactoryConfig              $di
    * @var daib17\Controller\ForecastController $controller
    */
    private $di;
    private $controller;



    /**
    * Setup before each testcase
    */
    public function setUp()
    {
        global $di;

        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global $di for view helpers
        $di = $this->di;

        $this->controller = new ForecastController();
        $this->controller->setDI($this->di);
    }



    /**
    * Test the route "index" with valid IP
    */
    public function testIndexAction()
    {
        // Set global IP address and run test
        $this->di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'ip' => "172.217.168.164",
                'period' => 0
            ]
        ]);

        $res = $this->controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }


    /**
    * Test the route "index" with valid IP (past 30 days)
    */
    public function testIndexAction30Days()
    {
        // Set global IP address and run test
        $this->di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'ip' => "172.217.168.164",
                'period' => 1
            ]
        ]);

        $res = $this->controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }



    /**
    * Test the route "index" with no IP
    */
    public function testIndexActionNoIP()
    {
        // Set global IP address and run test
        $this->di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'period' => 0
            ]
        ]);

        $res = $this->controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }


    /**
    * Test the route "index" with bad IP
    */
    public function testIndexActionBadIP()
    {
        // Set global IP address and run test
        $this->di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'ip' => "172.217.168",
                'period' => 0
            ]
        ]);

        $res = $this->controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }



    /**
    * Test the route "index" with no latitude and longitude
    */
    public function testIndexActionLatLon()
    {
        // Set global IP address and run test
        $this->di->get("request")->setGlobals([
            'post' => [
                'submitBtn' => "Submit",
                'lat' => '28.05',
                'lon' => '-16.71',
                'period' => 0
            ]
        ]);

        $res = $this->controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>Forecast | ramverk1</title>";
        $this->assertContains($exp, $body);
    }
}
