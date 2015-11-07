<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$id=$_GET["id_monitor"];
$pegaid = (int) $_GET['id_monitor'];

$sql = "DELETE FROM monitor WHERE id_monitor=$pegaid";



if($db->query($sql)){

    echo "<script>alert('Monitor deletado com sucesso!');top.location.href='tabelamonitor.php';</script>";
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