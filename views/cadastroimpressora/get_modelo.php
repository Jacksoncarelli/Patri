<?php
include("../../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
require_once ("../../conexao.php");

//echo $_GET["id"];

$dados_impressora = "SELECT * FROM modelo WHERE id_fabricante = " . $_GET['id'];

$modelos= array();

$resultadoimpressora = mysql_query($db,$dados_impressora);

while($tbl=mysql_fetch_array($dados_impressora)) {
 $id_modelo=$tbl['id_modelo'];
	$modelo=$tbl['modelo'];

	$modelos[$id_modelo] = $modelo;

}
echo $dados_impressora;

?>




?>