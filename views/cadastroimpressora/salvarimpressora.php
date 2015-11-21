<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$id=$_GET["id_impressora"];
$pegaid = (int) $_GET['id_impressora'];
$fabricante=$_GET["fabricante"];
$local=$_GET["local"];
$responsavel=$_GET["responsavel"];
$modelo=$_GET["modelo"];				
$status=$_GET["status"];
$comentario=$_GET["coment"];
$nome=$_GET["nome"];
$con_atual=$_GET["contagem_atual"];
$num_serie=$_GET["num_serie"];
$num_patrimonio=$_GET["num_patrimonio"];


$usb=$_GET['usb'];
$paralela=$_GET['paralela'];
$wifi=$_GET['wifi'];
$lan=$_GET['lan'];
$port_serial=$_GET['port_serial'];




if(empty($num_serie))
	$num_serie='NULL';

if(empty($num_patrimonio))
	$num_patrimonio='NULL';


$sql = "UPDATE impressora SET num_patrimonio=$num_patrimonio,num_serie='$num_serie',con_atual=$con_atual,usb=$usb,paralela=$paralela,wifi=$wifi,lan=$lan,port_serial=$port_serial,nome_impressora='$nome',comentario='$comentario',id_fabricante=$fabricante,id_local=$local,id_modelo=$modelo,
										id_status=$status WHERE id_impressora=$id";


if($db->query($sql)){

    echo "<script>top.location.href='tabelaimpressora.php';</script>";
}
else
	{
		echo $sql
.'<br>'.'<br>'.
		$usb,
		$wifi,
		$paralela,
		$lan,
		$port_serial,
			" numero serie: ".$num_serie,
			" fabricante: ".$fabricante,
			" local: ".$local,
			" responsavel: ".$responsavel,
			" modelo: ".$modelo,
			" status: ".$status,
			" comentario: ".$comentario,
			" USER: ".$user,
			" ID: ".$id;
 }	
  mysqli_close($db);
?>	