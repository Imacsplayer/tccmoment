<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Arbóreo</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/custom/style.css">

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
<nav class="navbar navbar-expand-lg" style = "background-color: #006600;" >
  <div class="container-fluid">
    <a class="navbar-brand logo" href="#">Arbóreo <i class="fas fa-tree"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Empresas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Categorias</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Vagas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Serviços</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Freelancers
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Categorias</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Serviços</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./servicos/add.php" tabindex="-1">Sign-In</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit" style="background-color: #000000;"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
	<main class="container">