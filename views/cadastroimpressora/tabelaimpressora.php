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
    <form action=pdf_impressora.php method=get >
    <button  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createModal">
        <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Relatório
    </button>
        </form>

    <p></p>
    <legend></legend>

    <div class="panel  panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-male fa-fw"></i>Impressoras</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                <tr>
                    <th>ID</th>
                    <th>Patrimonio</th>
                    <th>Série</th>
                    <th>Contagem Atual</th>
                    <th>Porta serial</th>
                    <th>Usb</th>
                    <th>Wifi</th>
                    <th>Lan</th>
                    <th>Paralela</th>
                    <th>Fabricante</th>
                    <th>Modelo</th>
                    <th>Local</th>
                    <th>Comentário</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>



                <?php
                $dados_impressora = "SELECT * FROM impressora LEFT JOIN local ON impressora.id_local = local.id_local
                                                      LEFT JOIN fabricante ON impressora.id_fabrincante = fabricante.id_fabricante
                                                      LEFT JOIN modelo ON impressora.id_modelo = modelo.id_modelo
                                                      LEFT JOIN status ON impressora.id_status = status.id_status";


                $resultadoimpressora = mysqli_query($db,$dados_impressora);
                if($db->query($dados_impressora)){

                    while ($row =$resultadoimpressora->fetch_assoc())  {
                        $dados_nome_so = "SELECT nome_so FROM sistema_operacional";
                        echo '  <tr><td>' . $row["id_impressora"] . '</td>';
                        echo '<td>' . $row["num_patrimonio"] . '</td>';
                        echo '<td>' . $row["num_serie"] . '</td>';
                        echo '<td>' . $row["con_atual"] . '</td>';
                        echo '<td>' . $row["port_serial"] . '</td>';
                        echo '<td>' . $row["usb"] . '</td>';
                        echo '<td>' . $row["wifi"] . '</td>';
                        echo '<td>' . $row["lan"] . '</td>';
                        echo '<td>' . $row["paralela"] . '</td>';
                        echo '<td>'. $row["nome_fabricante"].'</td>';
                        echo '<td>'. $row["modelo"].'</td>';
                        echo '<td>'. $row["sigla"].'</td>';
                        echo '<td>' . $row["comentario"] . '</td>';
                        echo '<td>'. $row["nome_status"].'</td>';


                         echo '<td align="center">
                        
    <form  action="editarimpressora.php" method="GET">

<button class="btn btn-success btn-sm" type="submit"  name="id_impressora" id='.$row["id_impressora"].' value='.$row["id_impressora"].'>Editar</button>

    </form>

                    </td>
                </tr>'  ;
                    }
                }
                mysqli_close($db);
                ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


</body>
<br><br><br><br><br><br><br><br><br>

<?php
require_once("../../footer.php")
?>