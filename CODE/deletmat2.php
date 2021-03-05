<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
include "conexao.php";
$idmat=$_POST['idmat'];
	$sql="delete from materia where IdMAteria='$idmat'";
	$r=$conexao->query($sql);

	if($r)
	{
		echo"<center>";
		echo"Deletado com Sucesso !<a href='deletmat1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}
	if(!$r)
	{
		echo"<center>";
		echo"Erro ao Alterar !<a href='deletmat1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}

?>