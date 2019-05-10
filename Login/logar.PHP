<?php
require_once '../conecta.inc';

$usuario = $_POST['nome'];
$senha 	 = $_POST['senha'];
echo $usuario;
echo $senha;
if(conecta()){
	$rst = selectUser($usuario,$senha);

	if(!empty($rst)){
		
			//Retorna os dados do banc
			$num = selectUser($usuario,$senha);
			foreach($num as $key => $value){
			$userId		=	$value->userid;
			$usuario 	=	$value->nome;
			$senha 		=	$value->senha;
			}
			
			session_start();
			$_SESSION['userid']= $userId;
			$_SESSION['nome']	  = $usuario;
			$_SESSION['senha']	  = $senha;
			
    		echo "<meta http-equiv='refresh' content='5;URL=../Menu/menu.php'>";
		}
else
	{
		echo("<script type='text/javascript'> alert('Usuário não cadastrado!'); location.href='../index.html';</script>");
        
	}
}
?>
