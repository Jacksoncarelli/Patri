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
		echo "$sql ",
		'<br>'.
		'<br>'.
				" nome: ".$nome,
			" serial: ".$serial_so,
			" numero serie: ".$num_serie,
			" fabricante: ".$fabricante,
			" local: ".$local,
			" sistema operacional: ".$so,
			" responsavel: ".$responsavel,
			" modelo: ".$modelo,
			" status: ".$status,
			" comentario: ".$comentario,
			" USER: ".$user;
 }	
  mysqli_close($db);
?>	