<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$modelo=$_POST["modelo"];
$fabricante=$_POST["fabricante"];

$sql = "INSERT INTO modelo (modelo,id_fabricante) VALUES ('$modelo',$fabricante)";

if($db->query($sql)){

    echo "<script>alert('Modelo cadastrado com sucesso!');top.location.href='../../views/index/index.php';</script>";
}
else
	{
		echo "<script>alert('Modelo ja existe!');top.location.href='../../views/index/index.php';</script>";
 }	
  mysqli_close($db);
?>	