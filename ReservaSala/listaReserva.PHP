<?php
require_once '../conecta.inc';
include '../Login/verifica.php';

	$userid=$_SESSION['userid'];

	$rst 			= 	selectSala();
	$disponibilidade =	selectReservasala();


	$minha_Hora = '00:00:00';
 	$minha_Data = date('Y-m-d');

?>

<?php

for($d=0;$d<5;$d++){


	$dia=date('Y-m-d',strtotime('+'.$d.' day', strtotime($minha_Data)));
 	  
	echo"<h1>".$dia."</h1>";

	foreach($rst as $value){ 
		echo"<table border='1'>";
							?>

		<tr>
			<th scope="col">
						<spam>sala:<?php print $nomesala	= $value->nomesala; ?>
						<p>
						<spam>descricao:<?php print $descriacao	= $value->descricao;?>
						<?php $sala	= $value->salaid;?>
					</th>
			</tr>
								<?php 
								for($i=0;$i<=23;$i++){
									$hora=date("H:i:s",strtotime( $minha_Hora . " +".$i." hours"));
									?>
										<tr>
											<td >
												<?php echo $dia." "?>
											<a  href="../ReservaSala/listaReservaSave.php?	
																				salaid		=<?php echo $sala?>&
																				data		=<?php echo $dia?>&
																				hora		=<?php echo $hora?>
																				">
												<?php echo $hora ?>
												
											
									<?php foreach($disponibilidade as $value){

											if($sala==$value->salaid){

												if($dia==$value->data){

													if($hora==$value->horario){?>

												<spam>
												<?php print "bloqueada";?>
												
											</td>
										</tr>	
				<?php 
					
						} 
					}
				}
			}	
		}
		echo "</table>";
	}?>
<?php }?>