<?php
if(empty($_POST['login']) || empty($_POST['senha']))
{
	echo"<center>";
	echo"Preencha Todos os Campos !";
	echo"<a href='login1.php'> Voltar </a>";
	echo"</center>";
	exit;
}

$login=$_POST['login'];
$nome=$_POST['login'];
$senha=$_POST['senha'];
$tipo=$_POST['tipo'];

session_start();

include "conexao.php";

if($tipo == "A")
{
	$sql="select * from usuario where Login='$login' and senha='$senha' and tipo='A'";
    $r=$conexao->query($sql);
    $usuario=$r->fetch_assoc();

	
	if($usuario)
    {	
       $_SESSION['login'] = $login;
       $_SESSION['tipo'] = $tipo;
         
	   header("location:pagaluno1.php");
    }
	if(!$usuario)
    {
	   echo"<center>";
	   echo"Voce Não Esta Cadastrado no nosso Sistema <a href='login1.php'> Voltar </a>";
	   echo"</center>";
	   exit;
    }
	
}


if($tipo == "P")
{
	
	$sql="select * from usuario where Login='$login' and senha='$senha' and tipo='P'";
    $r=$conexao->query($sql);
    $usuario=$r->fetch_assoc();
	
	if($usuario)
    {	
	   $_SESSION['login'] = $login;
       $_SESSION['tipo'] = $tipo;
	   header("location:pagprofessor1.php");	
    }
	if(!$usuario)
    {
	   echo"<center>";
	   echo"Voce Não Esta Cadastrado no nosso Sistema <a href='login1.php'> Voltar </a>";
	   echo"</center>";
	   exit;
    }
	

	
	
	
}









?>