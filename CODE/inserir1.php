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
<body>
<center>
<form action='inserir2.php' method='POST'>
<h2>Inserir Dados:</h2>
<table border=50>



<tr><td>
Nome:<input type='text' name='nome'/>
</td></tr>

<tr><td>
CPF:<input type='text' name='cpf'/><br/>
</td></tr>

<tr><td>
Dt_Nasc:<input type='text' name='dt_nasc'/><br/>
</td></tr>

<tr><td>
Login:<input type='text' name='login'/><br/>
</td></tr>

<tr><td>
Senha:<input type='text' name='senha'/><br/>
</td></tr>

<tr><td>
Professor<input type='radio' name='tipo' value='p'/> Aluno<input type='radio' name='tipo' value='a'/>
</td></tr>



<tr><td>
<input type='submit' value='INSERIR'/> <input type='reset' value='LIMPAR'/> 
</td></tr>

<tr><td>
<a href='pagprofessor1.php'>Tela De Opções</a>
<a href='login1.php'>Pagina Inicial</a>
</td></tr>

</table>
<table border=10>
<h2>Tabela Com Os Usuarios Ja Inseridos</h2>

<tr>
<td>----------------------</td>
<td>------------</td>
<td>----------------</td>
<td>------------</td>
<td>------------</td>
<td>------------</td>
</tr>

<tr>
<td><b>Nome</b>        </td>
<td><b>CPF</b>         </td>
<td><b>Dt_Nasc</b>     </td>
<td><b>Login</b>       </td>
<td><b>Senha</b>       </td>
<td><b>Tipo</b>        </td>
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

<tr>
<td>----------------------</td>
<td>------------</td>
<td>----------------</td>
<td>------------</td>
<td>------------</td>
<td>------------</td>
</tr>

</table>


</form>
</center>
</body>

</html>