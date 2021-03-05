<?php

$host="localhost";
$user="root";
$pass="";
$banco="trabbancoephp";
$conexao=new mysqli($host,$user,$pass,$banco);

if($conexao->connect_error){
	echo "Erro : ".$conexão->connect_error;
    exit;
}

?>