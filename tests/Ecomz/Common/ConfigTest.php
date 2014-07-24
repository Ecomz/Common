<?php
namespace Ecomz\Common;

class ConfigTest extends \PHPUnit_Framework_TestCase
{

    public function testLoadConfig()
    {
        $config = new Config(__DIR__, "/config.conf");
        $teste = $config->get('teste');
        $this->assertTrue(is_array($teste));
        $this->assertCount(2, $teste);
        $this->assertEquals('Ecomz\Common', $teste['nome']);
        $this->assertEquals('Ivo Nascimento', $teste['author']);
        $this->assertEquals('qualquer data', $config->get('nosectiondata'));
    } 
}
