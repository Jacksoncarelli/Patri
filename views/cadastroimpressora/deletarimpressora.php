<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$id=$_GET["id_impressora"];
$pegaid = (int) $_GET['id_impressora'];

$sql = "DELETE FROM impressora WHERE id_impressora=$pegaid";



if($db->query($sql)){

    echo "<script>top.location.href='tabelaimpressora.php';</script>";
}
else
{
    echo 
        " ID: ".$id;
}
mysqli_close($db);
?>	