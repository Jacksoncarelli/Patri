<?php
include("../../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
require_once ("../../conexao.php");

echo $_GET["id_fabricante"];

$dados_impressora = "SELECT * FROM modelo WHERE id_fabricante = '" . $_GET["fabricante_id"] . "'";

$resultadoimpressora = mysqli_query($db,$dados_impressora);
$row = $resultadoimpressora->fetch_assoc() ;
		echo $row['modelo'];

//
//if(!empty($_GET["id_fabricante"])) {
//	$query = "SELECT * FROM modelo WHERE id_fabricante = '" . $_GET["fabricante_id"] . "'";
//
//                  $sistemas=mysqli_query("SELECT * FROM modelo WHERE id_fabricante = '" . $_GET["fabricante_id"] . "'");
//                      $tbl=mysqli_fetch_array($sistemas);
//						  $nomemodelo = $tbl['modelo'];
//						  $id = $tbl['id_modelo'];
//
//		echo $nomemodelo;
//	echo $id;
//
//
//	var_dump($id);
//	return json_encode($id);
//}
?>