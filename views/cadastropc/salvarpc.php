<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$id=$_POST["id_pc"];
$pegaid = (int) $_GET['id_pc'];
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
$patrimonio=$_POST['num_patrimonio'];

$sql = "UPDATE computador SET nome='$nome',serial_so='$serial_so',num_serie='$num_serie',comentario='$comentario',
		  id_fabricante=$fabricante,id_local=$local,id_so=$so,id_modelo=$modelo,id_status=$status,
		  num_patrimonio='$patrimonio' WHERE id_computador=$id";



if($db->query($sql)){

    echo "<script>alert('Computador atualizado com sucesso!');top.location.href='tabelapc.php';</script>";
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
			" USER: ".$user,
			" ID: ".$id;
 }	
  mysqli_close($db);
?>	