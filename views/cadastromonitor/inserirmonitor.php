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

if ($dvi == 1) {

	$dvi=1;
} else {


	$dvi=0;
}

if ($vga == 1) {

	$vga=1;
} else {


	$vga=0;
}

if ($hdmi == 1) {

	$hdmi=1;
} else {


	$hdmi=0;
}

if ($autofalante == 1) {

	$autofalante=1;
} else {


	$autofalante=0;
}


if ($displayport == 1) {

	$displayport=1;
} else {


	$displayport=0;
}

if ($microfone == 1) {

	$microfone=1;
} else {


	$microfone=0;
}

if ($webcam == 1) {

	$webcam=1;
} else {


	$webcam=0;
}




$sql = "INSERT INTO monitor (comentario,id_fabricante,id_local,id_modelo,id_status,id_user,hdmi,vga,dvi,autofalante,displayport,microfone,webcam)
	VALUES ('$comentario',$fabricante,$local,$modelo,$status,$user,$hdmi,$vga,$dvi,$autofalante,$displayport,$microfone,$webcam)";

if($db->query($sql)){

    echo "<script>alert('Monitor cadastrado com sucesso!');top.location.href='monitor.php';</script>";
}
else
	{
		echo 
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