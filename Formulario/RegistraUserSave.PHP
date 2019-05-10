<?php
require_once '../conecta.inc';    

   insertUser( 
   				$_POST["nome"],
				$_POST["senha"]       
               );

  echo("<script type='text/javascript'> alert('Usario salvo com sucesso!'); location.href='../index.html';</script>");
?>