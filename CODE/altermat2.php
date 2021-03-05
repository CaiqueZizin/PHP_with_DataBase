<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
if(empty($_POST['nome']) || empty($_POST['periodo']))
{
   echo"<center>";
   echo"Preencha todos os campos !<a href='altermat1.php'> Voltar </a> ";
   echo"</center>";
   exit;
}

$idmat=$_POST['idmat'];
$idprof=$_POST['idprof'];
$nome=$_POST['nome'];
$periodo=$_POST['periodo'];



include "conexao.php";

	$sql="update materia set IdProfessor='$idprof',Materia='$nome',periodo='$periodo' where IdMateria='$idmat'";

	$r=$conexao->query($sql) or die ($conexao->error);

	if($r)
	{
		echo"<center>";
		echo"Alterado com Sucesso !<a href='altermat1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}
	if(!$r)
	{
		echo"<center>";
		echo"Erro ao Alterar !<a href='altermat1.php'> Voltar </a>";
		echo"</center>";
        exit;
	}

?>