<?php

/*
Application class test case
*/
require 'vendor/autoload.php';

class ApplicationTest extends PHPUnit_Framework_TestCase {

    public function testConstruct() {
        $app = new Application("application");
        $this->assertEquals("application", $app->getInstance());
    }
}