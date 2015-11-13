<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$id=$_POST["id_monitor"];
$pegaid = (int) $_POST['id_monitor'];

$sql = "DELETE FROM monitor WHERE id_monitor=$pegaid";



if($db->query($sql)){

    echo "<script>top.location.href='tabelamonitor.php';</script>";
}
else
{
    echo
        " ID: ".$id;
}
mysqli_close($db);
?>	