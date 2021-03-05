<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
$idUsuario=$_POST['idUsuario'];
include "conexao.php";
	$sql="delete from usuario where IdUsuario='$idUsuario'";
	$r=$conexao->query($sql);

	if($r)
	{
		echo"<center>";
		echo"Deletado com Sucesso !<a href='deletar1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}
	if(!$r)
	{
		echo"<center>";
		echo"Erro ao Alterar !<a href='deletar1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}

?>