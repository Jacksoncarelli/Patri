<?php
include("../../login/seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../../css/menu.css">
 <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
 <script src="../../css/bootstrap/js/jquery-1.11.3.min.js"></script>
 <?php
 require_once("../../topo.php");
 ?>
 </head>

 <title>Sistema de Inventário</title></head>
<body>

<h1> &nbsp&nbspSeja bem vindo!!</h1>

<br>
Perguntar sobre o status, se vai ficar no banco ou só no checkbox
<br><br>
TROCAR OS TIPOS DOS VALORES EM IMPRESSORA E MONITOR COLOCAR BOOLEAN
<br><br>
VER QUESTAO DO RESPONSÁVEL
<br><br>
MUDAR NA TABELA IMPRESSORA O CAMPO "ID_FABRINCANTE"
<br><br>
 MONITOR NAO POSSUI NUM_PATRIMONIO
 <br><br>
 MONITOR NAO POSSUI NUMERO DE SÉRIE
  <br><br>
 MONITOR NAO POSSUI RESPONSÁVEL
  <br><br>
  FAZER UM FOOTER
 </body>

<?php
require_once("../../footer.php")
?>

</html>
