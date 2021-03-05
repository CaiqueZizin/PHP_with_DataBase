<?php

include"conexao.php";
session_start();
if($_SESSION['tipo']!='A'){
	echo "Você Não Esta Logado Na Sua Area Correspondente ! <a href='login1.php'> VOLTAR </a>";
	exit;
}

$login=$_SESSION['login'];
$consulta = "select * from usuario where login='$login'";
$con=$conexao->query($consulta);

?>


<html>
<body>
<form action='pagaluno2.php' method='POST'  >
<center>
<table border=10>

<h2>Seus Dados:</h2>


<tr>
<td>Nome        </td>
<td>CPF         </td>
<td>Dt_Nasc      </td>
<td>Login       </td>
<td>Senha       </td>
<td>Tipo        </td>
</tr>



<?php  while($dado=$con->fetch_array())   { ?>

<tr>
<?php   $_SESSION['id'] = $dado["IdUsuario"];    ?>
<td> <?php  echo $dado["Nome"]; ?>       </td>
<td> <?php  echo $dado["CPF"]; ?>        </td>
<td> <?php  echo $dado["Dt_Nasc"]; ?>    </td>
<td> <?php  echo $dado["Login"]; ?>      </td>
<td> <?php  echo $dado["Senha"]; ?>      </td>
<td> <?php  echo $dado["Tipo"]; ?>       </td>
</tr>


<?php  } ?>


<tr><td>
<input type='submit' value='VER NOTAS' />
</td></tr>


<tr><td>
<a href='login1.php'>Pagina Inicial</a>  
</td></tr>

</table>
</center>
</form>
</body>
</html>





















