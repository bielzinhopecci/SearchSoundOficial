<?php 
	$link = '';
	if ($pagina == 'index'){
		$link = 'index-aut';
	}else if($pagina == 'rock'){
		$link = 'rock-aut';
	}else if ($pagina == 'rock-inst'){
		$link = 'rock-inst-aut';
	}else if ($pagina == 'samba'){
		$link = 'samba-aut';
	}else if ($pagina == 'samba-inst'){
		$link = 'samba-inst-aut';
	}else if ($pagina == 'pagode'){
		$link = 'pagode-aut';
	}else if ($pagina == 'pagode-inst'){
		$link = 'pagode-inst-aut';
	}else if ($pagina == 'quemsomos'){
		$link = 'quemsomos-aut';
	}else if ($pagina == 'contato'){
		$link = 'contato';
	}


?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2 hidden-xs aut wow fadeInUp">
			<strong><a href="<?= "$link.php" ?> ">Versão sem Imagens</a></strong>						 
		</div>
	</div>
</div>