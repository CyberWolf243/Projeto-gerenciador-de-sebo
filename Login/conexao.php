<?php
function banco(){
	$servidor = "localhost";
	$usuario = "root";
	$senha = "ifsp";
	$dbname = "mydb";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
 return $conn;       
}
	
?>