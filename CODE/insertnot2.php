<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
if(empty($_POST['nota']))
{
	echo"<center>";
	echo"Preencha Todos os Campos !";
	echo"<a href='insertnot1.php'> Voltar </a>";
    echo"</center>";
	exit;
}
$idalu=$_POST['idalu'];
$idmat=$_POST['idmat'];
$nota=$_POST['nota'];

include "conexao.php";



$sql="insert into nota values (null,'$idalu','$idmat','$nota');";
	$result=$conexao->query($sql);
	
	echo"<center>";
	if($result)
	{
		echo"inserido com Sucesso ! <a href='insertnot1.php'>Voltar</a>";
	}
	else
	{
		echo "Falha Ao Inserir ! <a href='insertnot1.php'>Voltar</a>";
		
	}
















?>