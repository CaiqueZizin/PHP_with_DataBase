<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
if(empty($_POST['nome']) || empty($_POST['periodo']))
{
	echo"<center>";
	echo"Preencha Todos os Campos !";
	echo"<a href='insertmat1.php'> Voltar </a>";
	echo"</center>";
	exit;
}

$idProf=$_POST['idprof'];
$nome=$_POST['nome'];
$periodo=$_POST['periodo'];

include "conexao.php";



$sql="insert into materia values (null,'$idProf','$nome','$periodo');";
	$result=$conexao->query($sql);
	
	echo"<center>";
	if($result)
	{
		echo"inserido com Sucesso ! <a href='insertmat1.php'>Voltar</a>";
	}
	else
	{
		echo "Falha Ao Inserir ! <a href='insertmat1.php'>Voltar</a>";
		
	}
















?>