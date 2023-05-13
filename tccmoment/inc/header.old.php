<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Testando um header decente</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
		<!-- <style>
			body {
				padding-top: 50px;
				padding-bottom: 20px;
			}
			.btn-light {
				color: #FFFFFF;
				background-color: #999999; 
			}
			.btn-light:hover {
				color: #FFFFFF;
				background-color: #AAAAAA;
			}
			.header, #actions {
				margin-top: 10px;
			}
		</style> -->
		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mx-4" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Ação</a>
          <a class="dropdown-item" href="#">Outra ação</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Algo mais aqui</a>
        </div>
      </li>
    </ul>
	<form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
	  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
	</form>
  </div>
</nav>
			<main class="container">