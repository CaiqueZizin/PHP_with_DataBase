<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
?>
<html>
<head>
<title>Pagina Do Professor</title>
</head>
<body>
<center>
<form action='pagprofessor1.php' method='POST'>
<table border=10>

<h2>Bem Vindo Professor      </h2>
<h3>Confira As Opções Abaixo </h3>
<tr><td><a href='inserir1.php'>Inserir Dados(Profs/Alunos)</a></tr></td>
<tr><td><a href='insertmat1.php'>Inserir MATERIAS</a></tr></td>
<tr><td><a href='insertnot1.php'>Inserir NOTAS</a></tr></td>

<tr><td>------------------------------------------------------</tr></td>

<tr><td><a href='alterar1.php'>Alterar Dados(Profs/Alunos)</a></tr></td>
<tr><td><a href='altermat1.php'>Alterar MATERIAS</a></tr></td>
<tr><td><a href='alterNota1.php'>Alterar Notas</a></tr></td>

<tr><td>------------------------------------------------------</tr></td>

<tr><td><a href='deletar1.php'>Deletar Dados(Profs/Alunos)</a></tr></td>
<tr><td><a href='deletmat1.php'>Deletar Materias</a></tr></td>
<tr><td><a href='deletNota1.php'>Deletar Notas</a></tr></td>

<tr><td>------------------------------------------------------</tr></td>

<tr><td><a href='login1.php'>Pagina Inicial</a></tr></td>
</table>
</center>
</body>
</html>