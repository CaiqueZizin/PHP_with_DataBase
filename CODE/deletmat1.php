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
<form action='deletmat2.php' method='POST'>


<table border=10>

<h2>Deletar Materias</h2>





<tr><td>
-------------------------------------------[!Importante!]------------------------------------
</tr></td>

<tr><td>
-------!!Ao Executar A Materia  e Todos Os Seus Dados Serão Excluidos!!--------
</tr></td>

<tr><td>
-------------------------------------------[!Importante!]------------------------------------
</tr></td>

<tr><td>
<b>Deletar Materia De</b>:<select name='idmat'><br/>
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
<input type='submit' value='DELETAR'/>
</td></tr>


<tr><td>
<a href='pagprofessor1.php'>Tela De Opções</a>
<a href='login1.php'>Pagina Inicial</a>
</td></tr>


</table>





<table border=0>
<br/>
<tr><td>
<h3>Tabela Com Materias Atuais</h3>
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