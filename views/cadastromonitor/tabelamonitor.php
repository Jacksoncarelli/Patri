<?php
include("../../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página

?>
<?php
require_once("../../topo.php");
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../css/bootstrap/js/jquery-1.11.3.min.js"></script>
    <title>Tabela Computadores</title>
    <?php
    require_once ("../../conexao.php");
    ?>
</head>
<body>





<div class="container">

    <form action="pdf_monitor.php">
    <button  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createModal">
        Imprimir Relatório
    </button></form>

    <p></p>
    <legend></legend>



<div class="panel  panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-male fa-fw"></i>Monitores</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Fabricante</th>
                    <th>Local</th>
                    <th>HDMI</th>
                    <th>VGA</th>
                    <th>DVI</th>
                    <th>Displayport</th>
                    <th>Auto Falante</th>
                    <th>Microfone</th>
                    <th>Webcam</th>
                    <th>Comentario</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>



                     <?php
                     $dados_monitor = "SELECT * FROM monitor LEFT JOIN local ON monitor.id_local = local.id_local
                                                             LEFT JOIN modelo ON monitor.id_modelo = modelo.id_modelo
                                                             LEFT JOIN fabricante ON monitor.id_fabricante = fabricante.id_fabricante
                                                             LEFT JOIN status ON monitor.id_status = status.id_status" ;
                     $resultadomonitor = mysqli_query($db,$dados_monitor);

                     if($db->query($dados_monitor)){
                         while ($row =$resultadomonitor->fetch_assoc()) {
                             echo '  <tr><td>'. $row["id_monitor"].'</td>';
                             echo '<td>' . $row["modelo"] . '</td>';
                             echo '<td>' . $row["nome_fabricante"] . '</td>';
                             echo '<td>' . $row["nome_local"] . '</td>';
                             echo '<td>' . $row["hdmi"] . '</td>';

//                             if ($row["hdmi"] = 1){
//                                 echo '<td> Possui</td>';
//                             } else {
//                                 echo '<td> Não possui</td>';
//
//                             }
                             echo '<td>' . $row["vga"] . '</td>';
                             echo '<td>' . $row["dvi"] . '</td>';
                             echo '<td>' . $row["displayport"] . '</td>';
                             echo '<td>' . $row["autofalante"] . '</td>';
                             echo '<td>' . $row["microfone"] . '</td>';
                             echo '<td>' . $row["webcam"] . '</td>';
                             echo '<td>' . $row["comentario"] . '</td>';
                             echo '<td>' . $row["nome_status"] . '</td>';


                                    echo '<td align="center">
                      <button " class="btn btn-editar btn-sm" data-toggle="modal"
                               id=' . $row["id_monitor"] . '>
                            <i class="glyphicon glyphicon-pencil"></i>  Editar
                        </button>
                    </td>
                </tr>';
                         }

                     }
                     mysqli_close($db);
                     ?>


                </tbody>
            </table>
        </div>
    </div>
</div>








</body>