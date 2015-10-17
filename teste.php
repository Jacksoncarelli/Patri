<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/menu.css">

<title>Sistema de Inventário</title></head>
<?php
include("login/seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<body>
<ul id="menu">
    <li><a href="#">Inicio</a></li>
    <li>
        <a href="#">Cadastro</a>
        <ul>
            <li><a href="#">Consulta</a></li>
            <li><a href="#">Aquisição</a></li>
            <li><a href="#">Baixa</a></li>
        </ul>
    </li>
    <li>
    <a href="#">Transferência</a>
        <ul>
            <li><a href="#">Transferir itens</a></li>
            <li><a href="#">Enviados</a></li>
            <li><a href="#">Recebidos</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Listagens</a>
        <ul>
            <li><a href="#">Transferências</a></li>
            <li><a href="#">Cadastro</a></li>
        </ul>
        </li>
    <li><a href="#">Sobre</a></li>
    <li><a href="#">Contato </a></li>

</ul>
  

   <footer>
   <br>
   <br>
    <div align="right">Sistema criado para disciplina de Desenvolvimento WEB &nbsp
    <br>
    Copyright information - 2015 &nbsp&nbsp</div>
  </footer>
 </body>
</html>