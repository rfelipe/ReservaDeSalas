<?php
require_once '../conecta.inc';
include '../Login/verifica.php';

	$userid=$_SESSION['userid'];

 	$salaid	=	$_GET['salaid'];
	$data 	=	$_GET['data'];	
	$hora 	=	$_GET['hora'];


	$disponibilidade =	selectReservasalaWhere($salaid,$data,$hora);


	foreach ($disponibilidade as $value) {
			$reservaUserId 	= $value->userid;
			$reservaData	= $value->data;
			$reservaHora	= $value->horario;
			$reservaSalaid  = $value->salaid;
		}
			if($userid == $reservaUserId){
					DeleteReservasala($salaid,$data,$hora,$userid);
					echo "<meta http-equiv='refresh' content='5;URL=../ReservaSala/listaReserva.php'>";
				
			}
			else if(($reservaData==$data) && ($reservaHora == $hora) ){
				echo "ja tem reerva";
					
			}	
			else{
						insertReservasala($salaid,$data,$hora,$userid);
						echo "<meta http-equiv='refresh' content='5;URL=../ReservaSala/listaReserva.php'>";
						
					
			}


?>