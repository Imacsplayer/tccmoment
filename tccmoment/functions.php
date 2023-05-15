<?php

	require_once('config.php');
	require_once(DBAPI);

	$servicos = null;
	$servico = null;

	/**
	 *  Listagem de Clientes
	 */
	function index() {
		global $servicos;
		$servicos = find_all('servicos');
	}
	/**
 	 *  Cadastro de Clientes
	 */
	?>