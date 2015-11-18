<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$id=$_GET["id_pc"];
$pegaid = (int) $_GET['id_pc'];

$sql = "DELETE FROM computador WHERE id_computador=$pegaid";



if($db->query($sql)){

    echo "<script>top.location.href='tabelapc.php';</script>";
}
else
{    
    echo $sql,
    " nome: ".$nome,
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