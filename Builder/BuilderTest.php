<?php
require_once "Builder.php";

class BuilderTest extends \PHPUnit_Framework_TestCase {


    public function testBuilder() {
        echo "a";
        $builder = new Builder();
        $this->assertInstanceOf( 'Builder', $builder, "Instance of builder" );
    }


}