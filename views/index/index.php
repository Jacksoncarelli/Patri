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
 <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
 <?php
 require_once("../../topo.php");
 ?>
 </head>
<style type="text/css">

@-webkit-keyframes fadeIn {
0% { opacity: 0; }
100% { opacity: 1; } 
}
@-moz-keyframes fadeIn {
0% { opacity: 0;}
100% { opacity: 1; }
}
@-o-keyframes fadeIn {
0% { opacity: 0; }
100% { opacity: 1; }
}
@keyframes fadeIn {
0% { opacity: 0; }
100% { opacity: 1; }
}

	.fadeIn {
-webkit-animation: fadeIn 3s ease-in-out;
-moz-animation: fadeIn 3s ease-in-out;
-o-animation: fadeIn 3s ease-in-out;
animation: fadeIn 3s ease-in-out;
}
h1 {
	font-family: 'Poiret One', cursive;
	font-size: 80px;
}
h2 {
	font-family: 'Poiret One', cursive;
	font-size: 50px;
}
</style>


 <title>Sistema de Inventário</title></head>
<body >
<div id="wrap">

<div class="container">


<Br><Br><Br><Br><Br><Br><Br>
<h1 align="center" class="fadeIn"> Seja bem vindo!!</h1>
<h2 align="center" class="fadeIn"> SisPatrimoio</h2>
<div class="push"></div>
  </div>
    </div>

<?php
require_once("../../footer.php")
?>

 </body>


</html>
