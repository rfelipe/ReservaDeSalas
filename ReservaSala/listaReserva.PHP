<?php
require_once '../conecta.inc';
include '../Login/verifica.php';

	$_SESSION['userid'];

	$rst 			= 	selectSala();
	$disponibilidade =	selectReservasala();


	$minha_Hora = '00:00:00';
 	$minha_Data = '2019-05-13';

?>


<?php
	foreach($rst as $value){ ?>
		<table border="2" cellspacing="2" cellpadding="2" cellspacing="2">
		<tr>
			<td scope="col">
						<spam>sala:<?php print $nomesala	= $value->nomesala; ?>
						<p>
						<spam>descricao:<?php print $descriacao	= $value->descricao;?>
						<?php $sala	= $value->salaid;?>
					</td>
			</tr>
								<?php 
								for($i=0;$i<=23;$i++){
									$hora=date("H:i:s",strtotime( $minha_Hora . " +".$i." hours"));
									?>
										<tr>
											<td><?php echo $hora?>
											
									<?php foreach($disponibilidade as $value){

											if($sala==$value->salaid){

												if($minha_Data==$value->data){

													if($hora==$value->horario){?>

												<spam><?php print "bloqueada";?>
											</td>
										</tr>		
				<?php }
				}
			}
		}
	}?>

			</td>

<?php }?>
</table>
<hr>