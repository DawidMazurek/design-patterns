<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use \DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use \DesignPatterns\Creational\AbstractFactory\XmlFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testHtmlProduct()
    {

        $factory = new HtmlFactory;
        $product = $factory->createProduct( 'milk', 2 );

        $this->assertInstanceOf( '\DesignPatterns\Creational\AbstractFactory\Html\Product', $product, 'Instance of Html\Product');

        $expectedRender = "<div><p>Name: milk</p><p>Prize: 2</p></div>";
        $this->assertEquals( $expectedRender, $product->render() );
    }

    /**
     *
     */
    public function testHtmlTransaction()
    {

        $factory = new HtmlFactory;
        $product = $factory->createTransaction( 12, 2, 'PLN' );

        $this->assertInstanceOf( '\DesignPatterns\Creational\AbstractFactory\Html\Transaction', $product, 'Instance of Html\Transaction');
        $expectedRender = "<div><p>Transaction number: 12</p><p>Amount: 2</p><p>Currency: PLN</p></div>";
        $this->assertEquals( $expectedRender, $product->render() );
    }

    /**
     *
     */
    public function testXmlProduct()
    {

        $factory = new XmlFactory;
        $product = $factory->createProduct( 'milk', 2 );

        $this->assertInstanceOf( '\DesignPatterns\Creational\AbstractFactory\Xml\Product', $product, 'Instance of Xml\Product');

        $expectedRender = "<product name='milk' prize='2' />";
        $this->assertEquals( $expectedRender, $product->render() );
    }

    /**
     *
     */
    public function testXmlTransaction()
    {

        $factory = new XmlFactory;
        $product = $factory->createTransaction( 12, 2, 'PLN' );

        $this->assertInstanceOf( '\DesignPatterns\Creational\AbstractFactory\Xml\Transaction', $product, 'Instance of Xml\Transaction');
        $expectedRender = "<transaction number='12' amount='2' currency='PLN' />";
        $this->assertEquals( $expectedRender, $product->render() );
    }
}
