<?php

namespace CDC\Loja\RH;

require "./vendor/autoload.php";

use PHPUnit_Framework_TestCase as PHPUnit;
use CDC\Loja\RH\CalculadoraDeSalario;
use CDC\Loja\RH\Funcionario;
use CDC\Loja\RH\TabelaCargos;

class CalculadoraDeSalarioTest extends PHPUnit
{
    public function testCalculoSalarioDesenvolvedorComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario(
            "Rafael",
            1500.0,
            TabelaCargos::DESENVOLVEDOR
        );

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(1500.0 * 0.9, $salario, null, 0.00001);
    }

    public function testCalculoSalarioDesenvolvedorComSalarioAcimaDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario(
            "Neto",
            4000.0,
            TabelaCargos::DESENVOLVEDOR
        );

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(4000.0 * 0.8, $salario, null, 0.00001);
    }

    public function testCalculoSalarioParaDBAComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $dba = new Funcionario(
            "Andre",
            500.0,
            TabelaCargos::DBA
        );

        $salario = $calculadora->calculaSalario($dba);

        $this->assertEquals(500.0 * 0.85, $salario, null, 0.00001);
    }
}
