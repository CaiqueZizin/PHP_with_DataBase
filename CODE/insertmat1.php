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
<form action='insertmat2.php' method='POST'>
<table border=10>

<h2>Inserir Materia</h2>


<tr><td>
<b>Nome da Materia</b>:<input type='text' name='nome'/><br/>
</td></tr>

<tr><td>
<b>Professor</b>:<select name='idprof'><br/>
<?php
$sql="select * from usuario where tipo='P'";
$r=$conexao->query($sql);

while($usuario=$r->fetch_assoc())
{
	echo"<option value='".$usuario['IdUsuario']."'>".$usuario['Nome']."</option>";
}
?>
</select>
</td></tr>

<tr><td>
<b>Periodo</b>:<input type='text' name='periodo'/><br/>
</td></tr>


<tr><td>
<input type='submit' value='INSERIR'/> <input type='reset' value='LIMPAR'/> 
</td></tr>

<tr><td>
<a href='pagprofessor1.php'>Tela De Opções</a>
<a href='login1.php'>Pagina Inicial</a>
</td></tr>





<table border=0>
<br/>
<tr><td>
<h3>Tabela Com Materias Ja inseridas</h3>
</tr></td>
</table>
<?php  
$sql="select usuario.Nome,materia.Materia,materia.periodo from usuario,materia where usuario.IdUsuario=materia.IdProfessor";
$r=$conexao->query($sql);

echo"<table border=1>";
echo"<tr><th>Professor</th>  <th>Materia</th>  </th><th>Periodo</th>  </tr>";

while($com=$r->fetch_assoc())
	
{
   echo"<tr>
   <td>".$com['Nome']."</td>
   <td>".$com['Materia']."
   <td>".$com['periodo']."
   </tr>";
}
	
echo"</table>";  
?>  
 
</form>
</center>
</body>
</html>






























