<?php
include("../../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
<meta charset="UTF-8">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">

    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../css/bootstrap/js/jquery-1.11.3.min.js"></script>
</head>
<body>
<?php
require_once("../../topo.php");
?>
<table  >
    <tr>
    <td align="left">
        <br>                                            

 <form action="inserirusuario.php " method="post">
            <br>
<table>
  <tr>
    <td colspan="2"><label>Cadastro de Usuario</label></td>
  </tr>
  <tr>
    <td colspan="2"><hr /></td>
  </tr>
  <tr>
    <td>Usuário:</td>
    <td><input type="text" name="usuario" /></td>
  </tr>
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome" /></td>
  </tr>
  <tr>
    <tr>
    <td>Senha:</td>
    <td><input type="password" name="senha" /></td>
  </tr>
  <tr>
    <td colspan="2"><br><input class="btn btn-primary btn-default " type="submit" value="CADASTRAR"/></td>
  </tr>
</table>
</form>
<br></td>
    </tr>
</table>
<?php
 require_once("../../footer.php")
?>
</body>



</html>