<?php 
	require "config.php"; 
	include DBAPI; 
	include(HEADER_TEMPLATE);
	
	$db = open_database();
?>

		<!-- <h1>Menu Principal</h1>
		<hr>

		<?php if ($db) : ?>

		<div class="row">
			<div class="col-xl-2 col-sm-3 col-md-2">
				<a href="revistas/add.php" class="btn btn-secondary">
					<div class="row">
						<div class="col-xl-12 text-center">
							<i class="fa-5x fa-solid fa-plus"></i>
						</div>
						<div class="col-xl-12 text-center">
							<p>Nova Revista</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-sm-3 col-md-2">
				<a href="revistas" class="btn btn-light">
					<div class="row">
						<div class="col-xl-12 text-center">
						 	<i class="fa-5x fa-solid fa-book-open"></i>
						</div>
						<div class="col-xl-12 text-center">
							<p>Revistas</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	<p>
		<div class="row">
			<div class="col-xl-2 col-sm-3 col-md-2">
				<a href="customers/add.php" class="btn btn-secondary">
					<div class="row">
						<div class="col-xl-12 text-center">
							<i class="fa-5x fa-solid fa-user-plus"></i>
						</div>
						<div class="col-xl-12 text-center">
							<p>Novo Cliente</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-sm-3 col-md-2">
				<a href="customers" class="btn btn-light">
					<div class="row">
						<div class="col-xl-12 text-center">
							<i class="fa-5x fa-solid fa-users"></i>
						</div>
						<div class="col-xl-12 text-center">
							<p>Clientes</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	<p>
	<div class="row">
			<div class="col-xl-2 col-sm-3 col-md-2">
				<a href="usuarios/add.php" class="btn btn-secondary">
					<div class="row">
						<div class="col-xl-12 text-center">
							<i class="fa-5x fa-solid fa-user-plus"></i>
						</div>
						<div class="col-xl-12 text-center">
							<p>Novo Usuário</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-sm-3 col-md-2">
				<a href="usuarios" class="btn btn-light">
					<div class="row">
						<div class="col-xl-12 text-center">
							<i class="fa-5x fa-solid fa-users"></i>
						</div>
						<div class="col-xl-12 text-center">
							<p>Usuário</p>
						</div>
					</div>
				</a>
			</div>
		</div>

		<?php else : ?>
			<div class="alert alert-danger" role="alert">
				<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
			</div>

		<?php endif; ?> -->
		<?php include(FOOTER_TEMPLATE); ?>