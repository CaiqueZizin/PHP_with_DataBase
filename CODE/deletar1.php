<?php
include"conexao.php";
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}
$consultaUsu = "select * from usuario;";
$con =$conexao->query($consultaUsu);
?>
<html>
</body>
<center>
<form action='deletar2.php' method='POST'>

<table border=10>
<h2>Deletar Usuarios</h2>
<tr><td>
-------------------------------------------[!Importante!]------------------------------------
</tr></td>
<tr><td>
-------!!Ao Executar O Usuario e Todos Os Seus Dados Serão Excluidos!!--------
</tr></td>
<tr><td>
-------------------------------------------[!Importante!]------------------------------------
</tr></td>
<tr><td>
<b>Deletar Usuario</b> :<select name='idUsuario'><br/>
<?php
$sql="select * from usuario";
$r=$conexao->query($sql);

while($usuario=$r->fetch_assoc())
{
	echo"<option value='".$usuario['IdUsuario']."'>".$usuario['Nome']."</option>";
}
?>
</select>
</tr></td>
<tr><td>
<input type='submit' value='DELETAR'/>
</td></tr>
<tr><td>
<a href='pagprofessor1.php'>Tela De Opções</a>
<a href='login1.php'>Pagina Inicial</a>
</td></tr>
</table>


<table border=10>
<h2>Tabela Com Os Usuarios</h2>
<tr>
<td>Nome        </td>
<td>CPF         </td>
<td>Dt_Nasc     </td>
<td>Login       </td>
<td>Senha       </td>
<td>Tipo        </td>
</tr>
<?php  while($dado=$con->fetch_array())   { ?>
<tr>
<td> <?php  echo $dado["Nome"]; ?>       </td>
<td> <?php  echo $dado["CPF"]; ?>        </td>
<td> <?php  echo $dado["Dt_Nasc"]; ?>    </td>
<td> <?php  echo $dado["Login"];?>   </td>
<td> <?php  echo $dado["Senha"]; ?>       </td>
<td> <?php  echo $dado["Tipo"]; ?>        </td>
</tr>
<?php  } ?>
</table>
</form>
</center>
</body>
</html>