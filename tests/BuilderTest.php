<?php
require_once __DIR__ . "/../Builder/Builder.php";

class BuilderTest extends \PHPUnit_Framework_TestCase {


    public function testBuilder() {
        $builder = new Builder();
        $this->assertInstanceOf( 'Builder', $builder, "Instance of builder" );
        //$this->assertTrue( true );
    }


}