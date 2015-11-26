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
    <title>Tabela de Impressoras</title>
    <?php
    require_once ("../../conexao.php");
    ?>
</head>
<body>



<div id="wrap">
<div class="container">
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
                    <th>Nome</th>
                    <th>Patrimônio</th>
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
                    <th>Status</th> <?php if ($_SESSION['usuarioNivel'] == 2 || $_SESSION['usuarioNivel'] == 3 ){
                    echo '<th>Opções</th>';
                    }?>
                </tr>
                </thead>
                <tbody>




                <?php
                $dados_impressora = "SELECT * FROM impressora LEFT JOIN local ON impressora.id_local = local.id_local
                                                      LEFT JOIN fabricante ON impressora.id_fabricante = fabricante.id_fabricante
                                                      LEFT JOIN modelo ON impressora.id_modelo = modelo.id_modelo
                                                      LEFT JOIN status ON impressora.id_status = status.id_status";


                $resultadoimpressora = mysqli_query($db,$dados_impressora);
                if($db->query($dados_impressora)){

                    while ($row =$resultadoimpressora->fetch_assoc())  {
                        $dados_nome_so = "SELECT nome_so FROM sistema_operacional";
                        echo '  <tr><td>' . $row["id_impressora"] . '</td>';
                        echo '  <td>' . $row["nome_impressora"] . '</td>';

                         if(empty($row["num_patrimonio"]))
                                $row["num_patrimonio"]='N/C';
                        echo '<td>' . $row["num_patrimonio"] . '</td>';

                        if(empty($row["num_serie"]))
                                $row["num_serie"]='N/C';
                        echo '<td>' . $row["num_serie"] . '</td>';

                        echo '<td>' . $row["con_atual"] . '</td>';

                        if ($row["port_serial"]){
                            echo '<td><span class="glyphicon glyphicon-ok"></span></td>';
                        } else {
                            echo '<td><span class="glyphicon glyphicon-remove"></span></td>';
                        }
                        if ($row["usb"]){
                            echo '<td><span class="glyphicon glyphicon-ok"></span></td>';
                        } else {
                            echo '<td><span class="glyphicon glyphicon-remove"></span></td>';
                        }
                        if ($row["wifi"]){
                            echo '<td><span class="glyphicon glyphicon-ok"></span></td>';
                        } else {
                            echo '<td><span class="glyphicon glyphicon-remove"></span></td>';
                        }if ($row["lan"]){
                            echo '<td><span class="glyphicon glyphicon-ok"></span></td>';
                        } else {
                            echo '<td><span class="glyphicon glyphicon-remove"></span></td>';
                        }if ($row["paralela"]){
                            echo '<td><span class="glyphicon glyphicon-ok"></span></td>';
                        } else {
                            echo '<td><span class="glyphicon glyphicon-remove"></span></td>';
                        }
                        echo '<td>'. $row["nome_fabricante"].'</td>';
                        echo '<td>'. $row["modelo"].'</td>';
                        echo '<td>'. $row["sigla_local"].'</td>';

                         if(empty($row["comentario"]))
                                $row["comentario"]='N/C';
                        echo '<td>' . $row["comentario"] . '</td>';

                        echo '<td>'. $row["nome_status"].'</td>';

if ($_SESSION['usuarioNivel'] == 2 || $_SESSION['usuarioNivel'] == 3 ){ 
                         echo '<td align="center">
                        
    <form  action="editarimpressora.php" method="GET">

    
    <input class="btn btn-success btn-sm" type="hidden"   name="port_serial" id='.$row["port_serial"].' value="'.$row["port_serial"].'"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="usb" id='.$row["usb"].' value="'.$row["usb"]. '"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="paralela" id='.$row["paralela"].' value="'.$row["paralela"]. '"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="wifi" id= '.$row["wifi"]. ' value=" '.$row["wifi"]. '"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="lan" id= '.$row["lan"]. ' value=" '.$row["lan"]. '"/>

  <input class="btn btn-success btn-sm" type="hidden"  name="id_status" id='.$row["id_status"].' value='.$row["id_status"].'>
<button class="btn btn-success btn-sm" type="submit"  name="id_impressora" id='.$row["id_impressora"].' value='.$row["id_impressora"].'>Editar</button>

    </form>

                    </td>
                </tr>'  ;
            }
                    }
                }
                mysqli_close($db);
                ?>


                </tbody>
            </table>
        </div>
    </div><div class="panel-footer" align="right"></div>
</div>
</div>
</div>
</div>

<?php
require_once("../../footer.php")
?>
</body>