<?php

session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}

if(empty($_POST['idUsuario']))
{
	echo "Falta Dados!";
	exit;
}


if(empty($_POST['nome']) || empty($_POST['cpf']) ||  empty($_POST['dtnasc']) || empty($_POST['login']) || empty($_POST['senha']) || empty($_POST['tipo']) )
{
   echo"<center>";
   echo"Preencha todos os campos !<a href='alterar1.php'> Voltar </a> ";
   echo"</center>";
   exit;
}

$idUsuario=$_POST['idUsuario'];
$nome=$_POST['nome'];
$dtnasc=$_POST['dtnasc'];
$cpf=$_POST['cpf'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$tipo=$_POST['tipo'];


include "conexao.php";



	$sql="update usuario set nome='$nome',cpf='$cpf',Dt_Nasc='$dtnasc',login='$login',senha='$senha',Tipo='$tipo' where IdUsuario='$idUsuario'";
	$r=$conexao->query($sql);

	if($r)
	{
		echo"<center>";
		echo"Alterado com Sucesso !<a href='alterar1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}
	if(!$r)
	{
		echo"<center>";
		echo"Erro ao Alterar !<a href='alterar1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}

?>