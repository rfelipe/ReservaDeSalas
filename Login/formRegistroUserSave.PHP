<?php
require_once '../conecta.inc';

$nome 	=	$_POST["nome"];
$senha	=	$_POST["senha"];  

   insertPessoa(	$nome,
               		$senha
               );

  echo("<script type='text/javascript'> alert('Usario salvo com sucesso!'); location.href='../index.html';</script>");
?>