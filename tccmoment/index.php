<?php 
	require "config.php"; 
	include DBAPI; 
	include(HEADER_TEMPLATE);
	include "functions.php";
	index();
	
	$db = open_database();
	
?>
	

		<br/>
		<h1>Contrate profissionais ou busque empresas!</h1>
		<hr>

		<?php if ($db) : ?>
			<div class="row row-cols-1 row-cols-md-4 g-4">
				<?php if ($servicos) : ?>
					<?php foreach ($servicos as $servico) : ?>
						<div class="col">
								<div class="card h-100">
								<img src="./imagens/<?php echo $servico['img']; ?>" class="card-img-top" alt="..." 
								style = "width: 304px; height: 200px;" >
								<div class="card-body">
									<h5 class="card-title"><?php echo $servico['titulo']; ?></h5>
									<p class="card-text"><?php echo $servico['descricao']; ?></p>
									<a href="#" class="btn btn-primary">Visitar página</a>
								</div>
								</div>
						</div>		
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		<?php else : ?>
			<div class="alert alert-danger" role="alert">
				<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
			</div>

		<?php endif; ?>
	
		
		<?php include(FOOTER_TEMPLATE); ?>