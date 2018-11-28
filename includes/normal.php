<?php 
	$link = '';
	if ($pagina == 'index'){
		$link = 'index';
	}else if($pagina == 'rock'){
		$link = 'rock';
	}else if ($pagina == 'rock-inst'){
		$link = 'rock-inst';
	}else if ($pagina == 'samba'){
		$link = 'samba';
	}else if ($pagina == 'samba-inst'){
		$link = 'samba-inst';
	}else if ($pagina == 'pagode'){
		$link = 'pagode';
	}else if ($pagina == 'pagode-inst'){
		$link = 'pagode-inst';
	}else if ($pagina == 'quemsomos'){
		$link = 'quemsomos';
	}else if ($pagina == 'contato'){
		$link = 'contato';
	}
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2 hidden-xs aut wow fadeInUp">
			<strong><a href="<?= "$link.php" ?> ">Versão com Imagens</a></strong>						 
		</div>
	</div>
</div>