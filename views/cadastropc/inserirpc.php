<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$nome=$_POST["nome"];
$serial_so=$_POST["serial_so"];
$num_serie=$_POST["num_serie"];
$fabricante=$_POST["fabricante"];
$local=$_POST["local"];
$so=$_POST["so"];
$responsavel=$_POST["responsavel"];
$modelo=$_POST["modelo"];				
$status=$_POST["status"];
$comentario=$_POST["coment"];
$user=$_SESSION['usuarioID'];
$patrimonio=$_POST['num_patrimonio'];

$sql = "INSERT INTO computador (nome,serial_so,num_serie,comentario,id_fabricante,id_local,id_so,id_modelo,id_status,id_user,num_patrimonio)
	VALUES ('$nome','$serial_so','$num_serie','$comentario',$fabricante,$local,$so,$modelo,$status,$user,$patrimonio)";

if($db->query($sql)){

    echo "<script>top.location.href='computador.php';</script>";
}
else
	{
		echo " nome: ".$nome,
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