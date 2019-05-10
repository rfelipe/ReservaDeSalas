<?php
require_once '../conecta.inc';    
include '../Login/verifica.php';

   insertSala( 
   				$_POST["nomesala"],
				$_POST["descricao"]       
               );

  echo("<script type='text/javascript'> alert('Sala criada com sucesso!'); location.href='../Menu/menu.php';</script>");
?>