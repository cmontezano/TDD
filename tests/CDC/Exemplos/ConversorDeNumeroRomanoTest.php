<?php

namespace CDC\Exemplos;

require "./vendor/autoload.php";

use CDC\Exemplos\ConversorDeNumeroRomano;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeNumeroRomanoTest extends PHPUnit
{
    public function testDeveEntenderOSimboloI()
    {
        $conversorRomano = new ConversorDeNumeroRomano();
        $numero = $conversorRomano->converte("I");
        $this->assertEquals(1, $numero);
    }

    public function testDeveEntenderOSimboloV()
    {
        $conversorRomano = new ConversorDeNumeroRomano();
        $numero = $conversorRomano->converte("V");
        $this->assertEquals(5, $numero);
    }

    public function testDeveEntenderOSimboloII()
    {
        $conversorRomano = new ConversorDeNumeroRomano();
        $numero = $conversorRomano->converte("II");
        $this->assertEquals(2, $numero);
    }

    public function testDeveEntenderOSimboloXXII()
    {
        $conversorRomano = new ConversorDeNumeroRomano();
        $numero = $conversorRomano->converte("XXII");
        $this->assertEquals(22, $numero);
    }

    public function testDeveEntenderOSimboloIX()
    {
        $conversorRomano = new ConversorDeNumeroRomano();
        $numero = $conversorRomano->converte("IX");
        $this->assertEquals(9, $numero);
    }

    public function testDeveEntenderOSimboloXXIV()
    {
        $conversorRomano = new ConversorDeNumeroRomano();
        $numero = $conversorRomano->converte("XXIV");
        $this->assertEquals(24, $numero);
    }
}
