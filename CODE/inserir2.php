<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
if(empty($_POST['nome']) || empty($_POST['cpf']) || empty($_POST['dt_nasc']) ||
   empty($_POST['login'])  || empty($_POST['senha']) )
{
	echo"<center>";
	echo"Preencha Todos os Campos !";
	echo"<a href='inserir1.php'> Voltar </a>";
    echo"<center>";
	exit;
	
}
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$dt_nasc=$_POST['dt_nasc'];
$login=$_POST['login'];
$senha=$_POST['senha'];









if(isset($_POST['tipo']))
{
	$tipo=$_POST['tipo'];
}

if($tipo == "a")
{
	include ("conexao.php");
	

	
	$sql="insert into usuario values (null,'$nome','$cpf','$dt_nasc','$login','$senha','A');";
	$result=$conexao->query($sql);
	
	echo"<center>";
	if($result)
	{
		echo"inserido com Sucesso ! <a href='inserir1.php'>Voltar</a>";
	}
	else
	{
		echo "Falha Ao Inserir ! <a href='inserir1.php'>Voltar</a>";
		
	}
	
	echo"</center>";

}

if($tipo == "p")
{
	include ("conexao.php");

	$sql="insert into usuario values (null,'$nome','$cpf','$dt_nasc','$login','$senha','P')";
	$result=$conexao->query($sql);
	
	
	echo"<center>";
	if($result)
	{
		echo"inserido com Sucesso ! <a href='inserir1.php'>Voltar</a>";
	}
	else
	{
		echo "Falha Ao Inserir ! <a href='inserir1.php'>Voltar</a>";
		
	}
	echo"</center>";

}









































?>