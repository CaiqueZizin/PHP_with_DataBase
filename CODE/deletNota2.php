<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
include "conexao.php";

$idalu=$_POST['idalu'];
$idmat=$_POST['idmat'];
  


	$sql="delete from nota where IdMAteria='$idmat' and IdAluno='$idalu'";
	$r=$conexao->query($sql);

	if($r)
	{
		echo"<center>";
		echo"Deletado com Sucesso !<a href='deletNota1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}
	if(!$r)
	{
		echo"<center>";
		echo"Erro ao Alterar !<a href='deletNota1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}

?>