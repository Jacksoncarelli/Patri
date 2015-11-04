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
        <form action=pdf_pc.php method=get >

        <button  class="btn btn-primary btn-sm" type="submit" >
            Imprimir Relatório
        </button>
        </form>

        <p></p>
        <legend></legend>

<div class="panel  panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-male fa-fw"></i>Computadores</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Patrimonio</th>
                    <th>Série</th>
                    <th>Sistema Operacional</th>
                    <th>Serial SO</th>
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
                $dados_pc = "SELECT * FROM computador LEFT JOIN local ON computador.id_local = local.id_local
                                                      LEFT JOIN sistema_operacional ON computador.id_so = sistema_operacional.id_so
                                                      LEFT JOIN fabricante ON computador.id_fabricante = fabricante.id_fabricante
                                                      LEFT JOIN modelo ON computador.id_modelo = modelo.id_modelo
                                                      LEFT JOIN status ON computador.id_status = status.id_status";

                $resultadopc = mysqli_query($db,$dados_pc);
                if($db->query($dados_pc)){

                    while ($row =$resultadopc->fetch_assoc())  {
                       // var_dump($resultadopc->fetch_assoc());
                        echo '  <tr><td>' . $row["id_computador"] . '</td>';
                        echo '<td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["num_patrimonio"] . '</td>';
                        echo '<td>' . $row["num_serie"] . '</td>';
                        echo '<td>' . $row["nome_so"] . '</td>';
                        echo '<td>'. $row["serial_so"].'</td>';
                        echo '<td>'. $row["nome_fabricante"].'</td>';
                        echo '<td>'. $row["modelo"].'</td>';
                        echo '<td>'. $row["sigla_local"].'</td>';
                        echo '<td>' . $row["comentario"] . '</td>';
                        echo '<td>'. $row["nome_status"].'</td>';

                        echo '<td align="center">
                      <button " class="btn btn-editar btn-sm" data-toggle="modal"
                               id=' . $row["id_computador"] . '>
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

</div>






</body>


<?php
require_once("../../footer.php")
?>