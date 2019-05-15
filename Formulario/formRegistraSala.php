<?php  
require_once '../conecta.inc';
include '../Login/verifica.php';

	$rst = 	selectSala();

?>

<!DOCTYPE html>
<html>
<head>
</head>
	<body>
		<h1>Cadastro de Sala</h1>
			<form method='POST' action='RegistraSalaSave.php' enctype="multipart/form-data">
			

				<label> Nome:
					<input type="text" name="nomesala">
				</label>
				<p>
				<label> Descrição:
					<input type="text" name="descricao">
				</label>

			<input type="submit" value="Salvar" action="submit"> 
			</form>

		<?php
				foreach($rst as $value){ ?>
					<div >
						<spam>Nome sala: <?php print $nomesala	= $value->nomesala; ?>
						<p>
						<spam>Descricao: <?php print $descriacao	= $value->descricao;?>
						<?php $sala	= $value->salaid;?>
					</div>

		<?php }?>
	</body>
</hml>