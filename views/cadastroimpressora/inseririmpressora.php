<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");


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


//$patrimonio=$_POST['num_patrimonio'];

$sql = "INSERT INTO impressora (id_local,id_user,id_status,id_fabrincante,id_modelo,num_serie,comentario,con_atual,num_patrimonio,wifi,usb,lan,paralela,port_serial)
	VALUES ($local,$user,$status,$fabricante,$modelo,'$num_serie','$comentario',$contagem,$num_patrimonio,$wifi,$usb,$lan,$paralela,$port_serial)";


if($db->query($sql)){
    
    echo "<script>alert('Impressora cadastrada com sucesso!');top.location.href='impressora.php';</script>";
}
else{ 
		echo" numero serie: ".$num_serie,
			" fabricante: ".$fabricante,
			" local: ".$local,
			" responsavel: ".$responsavel,
			" modelo: ".$modelo,
			" status: ".$status,
			" comentario: ".$comentario,
			" USER: ".$user,
			" Wifi: ".$wifi;
	;

 }	
  mysqli_close($db);









   

?>	