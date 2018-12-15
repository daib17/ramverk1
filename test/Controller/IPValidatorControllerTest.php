<?php

namespace daib17\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the IPValidatorController.
 */
class IPValidatorControllerTest extends TestCase
{
    /**
     * Test the route "index" with valid IPv4
     */
    public function testIndexActionIPv4()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global IPv4 address and run test
        $di->get("request")->setGlobals([
            'post' => [
                'ip' => "192.168.0.1"
            ]
        ]);

        // Setup the controller
        $controller = new IPValidatorController();
        $controller->setDI($di);

        $res = $controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>IP Validator | ramverk1</title>";
        $this->assertContains($exp, $body);
    }


    /**
     * Test the route "index" with valid IPv6
     */
    public function testIndexActionIPv6()
    {
        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Set global IPv6 address and run test
        $di->get("request")->setGlobals([
            'post' => [
                'ip' => "2607:f0d0:1002:51::4"
            ]
        ]);

        // Setup the controller
        $controller = new IPValidatorController();
        $controller->setDI($di);

        $res = $controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>IP Validator | ramverk1</title>";
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

        // Setup the controller
        $controller = new IPValidatorController();
        $controller->setDI($di);

        $res = $controller->indexAction();
        $body = $res->getBody();
        $exp = "<title>IP Validator | ramverk1</title>";
        $this->assertContains($exp, $body);
    }
}
