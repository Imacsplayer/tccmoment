<?php

	require_once('../config.php');
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

	 function upload($pasta_destino, $arquivo_destino, $tipo_arquivo, $nome_temp, $tamanho_arquivo)
	 {
		 try {
			 $nomearquivo = basename($arquivo_destino);
			 $uploadOk = 1;
			 if(isset($_POST["submit"])) {
				 $check = getimagesize($nome_temp);
				 if($check !== false) {
					 $_SESSION['message'] = "<h3> O arquivo é uma imagem </h3> - " . $check["mime"] . ".";
					 $_SESSION['type'] = "info";
					 $uploadOk = 1;
				 } 
				 else {
					  throw new Exception("<h3> O arquivo não é uma imagem</h3>");
					  $uploadOk = 0;
				 }
			 }
 
			 
			 if (file_exists($arquivo_destino)) {
				 throw new Exception ("<h3> Desculpe, esse arquivo já existe. </h3>");
				 $uploadOk = 0;
			 }
 
			 
			 if($tipo_arquivo != "jpg" && $tipo_arquivo != "png" && $tipo_arquivo != "jpeg"
			 && $tipo_arquivo != "gif" ) {
				 throw new Exception ("<h3> Desculpe, só arquivos .jpg, .png, .jpeg ou .gif são aceitos. </h3>");
				 $uploadOk = 0;
			 }
 
			 
			 if ($uploadOk == 0) {
				 throw new Exception ("<h3> Desculpe, seu arquivo não foi enviado. </h3>");
			 
			 } 
			 else {
				 if (move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo_destino)) {
					 $_SESSION['message'] = ("<h3> Seu arquivo ". htmlspecialchars( basename( $nomearquivo)). " foi enviado.</h3>");	
					 $_SESSION['type'] = "sucess";
			 
				 } 
				 else {
					 throw new Exception ("<h3>Desculpe, houve um erro no envio do seu arquivo.</h3>");
				 }
			 }
		 } catch (Exception $e) {
			 $_SESSION['message'] = "<h3> Aconteceu um erro: </h3> - " . $e->getMessage();
			 $_SESSION['type'] = "danger";
		 }
		 
	 }
	function add() {

		if (!empty($_POST['servico'])) {
		
		$today = new DateTime("now");
			//date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
		$servico = $_POST['servico'];
		
		
		if (!empty($_FILES["foto"]["name"])) 
			{
				$pasta_destino = "imagens";
				$arquivo_destino = $pasta_destino . basename($_FILES["foto"]["name"]);
				$nomearquivo = basename($_FILES["foto"]["name"]);
				$resolucao_arquivo = getimagesize($_FILES["foto"]["tmp_name"]);
				$tamanho_arquivo = $_FILES["foto"]["size"];
				$nome_temp = $_FILES["foto"]["tmp_name"];
				$tipo_arquivo = strtolower(pathinfo($arquivo_destino, PATHINFO_EXTENSION));
				
				upload($pasta_destino, $arquivo_destino, $tipo_arquivo, $nome_temp, $tamanho_arquivo);
				
				$servico['img'] = $nomearquivo;
			}

		$servico['img'] = $nomearquivo;
		save('servicos', $servico);
		header('location: ../index.php');

		}
	}
	/**
	 *	Atualizacao/Edicao de Cliente
	*/
	function edit() {

		$now = new DateTime("now");
			//date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
		if (isset($_GET['id'])) {
	
			$id = $_GET['id'];
	
			if (isset($_POST['servico'])) {
		
				$servico = $_POST['servico'];
				$servico['modified'] = $now->format("Y-m-d H:i:s");
		
				update('servicos', $id, $servico);
				header('location: index.php');
			} else {
		
				global $servico;
				$servico = find('servicos', $id);
			} 
		
		} else {
		header('location: index.php');
		}
	}
	/**
	 *  Visualização de um Cliente
	 */
	function view($id = null) {
		global $servico;
		$servico = find('servicos', $id);
	}
	/**
	 *  Exclusão de um Cliente
	 */
	function delete($id = null) {

		global $servico;
		$servico = remove('servicos', $id);
		
		header('location: index.php');
		}
	