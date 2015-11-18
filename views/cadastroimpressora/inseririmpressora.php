<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");

$nome=$_POST["nome"];
$fabricante=$_POST["fabricante"];
$local=$_POST["local"];
$contagem=$_POST["contagem_atual"];
$responsavel=$_POST["responsavel"];
$modelo=$_POST["modelo"];	
$comentario=$_POST["coment"];
$user=$_SESSION['usuarioID'];
$status=$_POST["status"];
$num_serie=$_POST["num_serie"];
$num_patrimonio=$_POST["num_patrimonio"];
$usb=$_POST["usb"];
$lan=$_POST["lan"];
$paralela=$_POST["paralela"];
$wifi=$_POST["wifi"];
$port_serial=$_POST["port_serial"];


if(empty($num_serie))
	$num_serie=NULL;

if(empty($contagem))
	$contagem=NULL;

if(empty($comentario))
	$comentario=NULL;

if(empty($num_patrimonio))
	$num_patrimonio=NULL;


$sql = "INSERT INTO impressora (id_local,id_status,id_fabricante,id_modelo,num_serie,comentario,con_atual,num_patrimonio,wifi,usb,lan,paralela,port_serial,nome_impressora)
	VALUES ($local,$status,$fabricante,$modelo,'$num_serie','$comentario','$contagem','$num_patrimonio',$wifi,$usb,$lan,$paralela,$port_serial,'$nome')";

if($db->query($sql)){
    
    echo "<script>alert('Impressora cadastrada com sucesso!');top.location.href='impressora.php';</script>";
}
else{ 
		echo  $sql,

		" numero serie: ".$num_serie,
			" fabricante: ".$fabricante,
			" local: ".$local,
			" responsavel: ".$responsavel,
			" modelo: ".$modelo,
			" status: ".$status,
			" comentario: ".$comentario,
			" USER: ".$user,
			" Wifi: ".$wifi,
			" LAN: ".$lan,
			" Porta serial: ".$port_serial,
			" paralela: ".$paralela,
			" usb: ".$usb;
	;

 }	
  mysqli_close($db);









   

?>	