<?php
include"conexao.php";
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
?>
<html>
<body>
<center>
<h2>Inserir Notas</h2>
<form action='insertnot2.php' method='POST'>
<table border=10>



<tr><td>
<b>Aluno</b>:<select name='idalu'><br/>
<?php
$sql="select * from usuario where tipo='A'";
$r=$conexao->query($sql);

while($usuario=$r->fetch_assoc())
{
	echo"<option value='".$usuario['IdUsuario']."'>".$usuario['Nome']."</option>";
}
?>
</select>
</td></tr>

<tr><td>
<b>Materia</b>:<select name='idmat'><br/>
<?php
$sql="select * from materia ";
$r=$conexao->query($sql);

while($materia=$r->fetch_assoc())
{
	echo"<option value='".$materia['IdMateria']."'>".$materia['Materia']."</option>";
}
?>
</select>
</td></tr>






<tr><td>
<b>Nota</b>:<input type='text' name='nota'/><br/>
</td></tr>


<tr><td>
<input type='submit' value='INSERIR'/> <input type='reset' value='LIMPAR'/> 
</td></tr>

<tr><td>
<a href='pagprofessor1.php'>Tela De Opções</a>
<a href='login1.php'>Pagina Inicial</a>
</td></tr>

</table>

<table border=0>
<br/>
<tr><td>
<h3>Tabela Com Notas Ja inseridas</h3>
</tr></td>

<?php  
$sql="select usuario.Nome,materia.Materia,nota.Nota from usuario,materia,nota where usuario.IdUsuario=nota.IdAluno and nota.IdMAteria=materia.IdMateria   and usuario.tipo='A'";
$r=$conexao->query($sql);

echo"<table border=1>";
echo"<tr><th>Aluno</th>  <th>Materia</th>  </th><th>Nota</th>  </tr>";

while($com=$r->fetch_assoc())
	
{
   echo"<tr>
   <td>".$com['Nome']."</td>
   <td>".$com['Materia']."
   <td>".$com['Nota']."
   </tr>";
}
	
echo"</table>";  
?> 


</form>
</center>
</body>
</html>