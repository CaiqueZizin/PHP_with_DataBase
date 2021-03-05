<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
if(empty($_POST['nota']))
{
   echo"<center>";
   echo"Preencha todos os campos !<a href='alterNota1.php'> Voltar </a> ";
   echo"</center>";
   exit;
}
$idalu=$_POST['idalu'];
$idmat=$_POST['idmat'];
$nota=$_POST['nota'];
include "conexao.php";

	$sql="update nota set Nota='$nota' where nota.IdMAteria='$idmat' and nota.IdAluno='$idalu'";

	$r=$conexao->query($sql) or die ($conexao->error);

	if($r)
	{
		echo"<center>";
		echo"Nota Alterada Com Sucesso !<a href='alterNota1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}
	if(!$r)
	{
		echo"<center>";
		echo"Erro ao Alterar !<a href='alterNota1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}

?>