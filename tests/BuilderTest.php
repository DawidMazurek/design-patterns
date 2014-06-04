<?php
require_once __DIR__ . "/../Builder/Builder.php";

class BuilderTest extends \PHPUnit_Framework_TestCase {


    public function testBuilder() {
        $builder = new Builder\Builder();
        $this->assertInstanceOf( 'Builder\Builder', $builder, "Instance of builder" );

    }

   /* public function testWillFail() {
        $this->assertTrue( false );
    }*/


}