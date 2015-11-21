<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$nome=$_POST["nome"];

$sql = "INSERT INTO fabricante (nome_fabricante) VALUES ('$nome')";

if($db->query($sql)){

    echo "<script>alert('Fabricante cadastrado com sucesso!');top.location.href='../../views/index/index.php';</script>";
}
else
	{
		echo "<script>alert('Fabricante ja existe!');top.location.href='../../views/index/index.php';</script>";
 }	
  mysqli_close($db);
?>	