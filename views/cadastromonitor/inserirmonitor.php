<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");

$num_serie=$_POST["num_serie"];
$fabricante=$_POST["fabricante"];
$local=$_POST["local"];
$responsavel=$_POST["responsavel"];
$modelo=$_POST["modelo"];				
$status=$_POST["status"];
$comentario=$_POST["coment"];
$user=$_SESSION['usuarioID'];
$patrimonio=$_POST['num_patrimonio'];
$hdmi=$_POST["hdmi"];
$vga=$_POST["vga"];
$dvi=$_POST["dvi"];
$autofalante=$_POST["autofalante"];
$displayport=$_POST["displayport"];
$microfone=$_POST["microfone"];
$webcam=$_POST["webcam"];
$tamanho=$_POST["tamanho"];

if(empty($num_serie))
	$num_serie=NULL;

if(empty($comentario))
	$comentario=NULL;

if(empty($patrimonio))
	$patrimonio=NULL;



$sql = "INSERT INTO monitor (tamanho,comentario,id_fabricante,id_local,id_modelo,id_status,id_user,hdmi,vga,dvi,autofalante,displayport,microfone,webcam,num_patrimonio,num_serie)
	VALUES ($tamanho,'$comentario',$fabricante,$local,$modelo,$status,$user,$hdmi,$vga,$dvi,$autofalante,$displayport,$microfone,$webcam,'$patrimonio','$num_serie')";

if($db->query($sql)){

    echo "<script>alert('Monitor cadastrado com sucesso!');top.location.href='monitor.php';</script>";
}
else
	{
		echo $sql,
			" fabricante: ".$fabricante,
			" local: ".$local,
			" responsavel: ".$responsavel,
			" modelo: ".$modelo,
			" status: ".$status,
			" comentario: ".$comentario,
			" USER: ".$user,
			" hdmi: ".$hdmi,
			" vga: ".$vga,
			" dvi: ".$dvi,
			" AUTOFALANTE: ".$autofalante,
			" displayport: ".$displayport,
			" microfone: ".$microfone,
			" webcam: ".$webcam;
 }	
  mysqli_close($db);
?>	