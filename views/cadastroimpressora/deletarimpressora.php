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

    echo "<script>alert('Impressora deletada com sucesso!');top.location.href='tabelaimpressora.php';</script>";
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