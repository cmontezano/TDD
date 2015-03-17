<?php

namespace CDC\Loja\Carrinho;

use CDC\Loja\Test\TestCase,
	CDC\Loja\Carrinho\CarrinhoDeCompras,
	CDC\Loja\Produto\Produto,
	CDC\Loja\Test\Bluider\CarrinhoDeComprasBuilder;

class CarrinhoDeComprasTest extends TestCase
{
	private $carrinho;

	protected function setUp()
	{
		$this->carrinho = new CarrinhoDeCompras();
		parent::setUp();
	}
}
