<?php
session_start();
if($_SESSION['tipo']!='P'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}

include"conexao.php";
$consultaUsu = "select * from usuario;";
$con =$conexao->query($consultaUsu);
?>
<html>
</body>
<center>
<form action='alterar2.php' method='POST'>

<table border=10>
<h2>Alterar Dados Dos Usuarios</h2>


<tr><td>
<b>Alterar Usuario</b> :<select name='idUsuario'><br/>
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
Novo <b>Nome</b>:<input type='text' name='nome' value='<?php echo $usuario['nome'];?>'/>
</td></tr>

<tr><td>
Novo <b>CPF</b>:<input type='text' name='cpf'/>
</td></tr>


<tr><td>
Nova <b>Dt_nasc</b>:<input type='text' name='dtnasc'/>
</td></tr>

<tr><td>
Novo <b>Login</b>:<input type='text' name='login'/>
</td></tr>

<tr><td>
Nova <b>Senha</b>:<input type='text' name='senha'/>
</td></tr>

<tr><td>
Novo <b>Tipo</b>:<select name='tipo'/>
<option value='A'>Aluno</option/>
<option value='P'>Professor</option/>
</select>
</td></tr>

<tr><td>
<input type='submit' value='PROSSEGUIR'/>
<input type='reset' value='LIMPAR'/>
</td></tr>

<tr><td>
<a href='pagprofessor1.php'>Tela De Opções</a>
<a href='login1.php'>Pagina Inicial</a>
</td></tr>
</table>


<table border=10>
<h2>Tabela Com Os Usuarios Ja Inseridos</h2>
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