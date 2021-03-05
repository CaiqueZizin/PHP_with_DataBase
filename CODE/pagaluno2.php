<?php
session_start();
if($_SESSION['tipo']!='A'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
$id = $_SESSION['id'];

include"conexao.php";

$consulta = "select materia.Materia,nota.Nota from materia,nota where $id=nota.IdAluno and nota.IdMAteria=materia.IdMateria;";
$con=$conexao->query($consulta);


?>

<html>
<body>
<form action='pagaluno2.php' method='POST'  >
<center>
<table border=10>
<h2><b>Suas Notas:</b></h2>
<tr>
<td><b>ID Da Materia<b></td>
<td><b>Nota</b>        </td>
</tr>
<?php  while($dado=$con->fetch_array())   { ?>
<tr>
<td> <?php  echo $dado["Materia"];?>   </td>
<td> <?php  echo $dado["Nota"];?>   </td>
</tr>
<?php  } ?>

<tr><td>
<a href='pagaluno1.php'>Pagina Anterior</a>  
</td></tr>

<tr><td>
<a href='login1.php'>Pagina Inicial</a>  
</td></tr>
</table>


</center>
</form>
</body>
</html>






