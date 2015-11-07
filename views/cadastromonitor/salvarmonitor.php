<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$id=$_GET["id_monitor"];
$pegaid = (int) $_GET['id_monitor'];
$fabricante=$_GET["fabricante"];
$local=$_GET["local"];
$responsavel=$_GET["responsavel"];
$modelo=$_GET["modelo"];				
$status=$_GET["status"];
$comentario=$_GET["coment"];
$hdmi = $_GET['hdmi'];
$dvi=$_GET['dvi'];
$vga = $_GET['vga'];
$displayport=$_GET['displayport'];
$microfone = $_GET['microfone'];
$autofalante=$_GET['autofalante'];
$webcam = $_GET['webcam'];


$sql = "UPDATE monitor SET comentario='$comentario',id_fabricante=$fabricante,id_local=$local,id_modelo=$modelo,
										id_status=$status,hdmi=$hdmi,dvi=$dvi,vga=$vga,displayport=$displayport,
										microfone=$microfone,autofalante=$autofalante,webcam=$webcam
										 WHERE id_monitor=$id";


if($db->query($sql)){

    echo "<script>top.location.href='tabelamonitor.php';</script>";
}
else
	{
		echo
		$hdmi ,
		$dvi,
		$vga,
		$displayport,
		$microfone,
		$autofalante,
		$webcam,
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