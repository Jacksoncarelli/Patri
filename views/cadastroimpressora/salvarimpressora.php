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
$comentario=$_GET["coment"];;


$sql = "UPDATE impressora SET comentario='$comentario',id_fabrincante=$fabricante,id_local=$local,id_modelo=$modelo,
										id_status=$status WHERE id_impressora=$id";


if($db->query($sql)){

    echo "<script>top.location.href='tabelaimpressora.php';</script>";
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