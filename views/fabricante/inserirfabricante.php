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