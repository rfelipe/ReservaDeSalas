<?php 
	
	function conecta(){
		//$username ='ditechguy'; 
		//$password ='ditechguy';
		//$conn = new PDO('mysql:host=challenges.ditech.com.br;port=3301;dbname=employees', $username, $password);
		$username ='root'; 
		$password ='';
		
		$conn = new PDO('mysql:host=localhost;dbname=employees', $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo=$conn;
		return $pdo;
		}
		
	try {
		conecta();
	} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
	}
	

	function selectUser($usuario,$senha){
			$conn=conecta();			
			$data = $conn->query('SELECT * FROM usuario WHERE nome =' . $conn->quote($usuario) . 'AND senha =' . $conn->quote($senha));
			$dados_encontrados = $data->fetchAll(PDO::FETCH_OBJ);
			return ($dados_encontrados);	
		}

	function selectSala(){
			$conn=conecta();			
			$data = $conn->query('SELECT * FROM sala');
			$dados_encontrados = $data->fetchAll(PDO::FETCH_OBJ);
			return ($dados_encontrados);	
		}

	function selectReservasala(){
			$conn=conecta();			
			$data = $conn->query('SELECT * FROM reservasala');
			$dados_encontrados = $data->fetchAll(PDO::FETCH_OBJ);
			return ($dados_encontrados);	
		}	

	function insertUser($a,$b){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO usuario(nome, senha) 
			VALUES(?,?)');
			$statement->execute(array($a,$b));					
		}

	function insertSala($a,$b){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO sala(nomesala, descricao) 
			VALUES(?,?)');
			$statement->execute(array($a,$b));					
		}


	//UPdate de dados do Funcionario ;	
	function insertUpdate($a,$b,$c,$d,$e,$f,$g,$id){
			$conn=conecta();								
			$statement = $conn->prepare('UPDATE funcionario SET id_func = ?, nome = ?, ender = ?, cid = ?, est = ?, sex = ?, sal = ? 
			 WHERE id_func= ?' );		
			$statement->execute(array($a,$b,$c,$d,$e,$f,$g,$id));
	
		}
	//Consulta DELETE com tabela e id e campo da tabela;
	function Delete($Q,$id,$tabela){
			$conn=conecta();			
			$data = $conn->query('DELETE FROM ' . $tabela . ' WHERE ' .$Q. ' = ' . $conn->quote($id));
		}
	
 ?> 