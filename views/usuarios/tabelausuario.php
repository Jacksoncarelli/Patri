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
            <h3 class="panel-title"><i class="fa fa-male fa-fw"></i>Usuários</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuario</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>




                <?php
                $dados_usuario = "SELECT * FROM usuarios";


                $resultadousuario = mysqli_query($db,$dados_usuario);
                if($db->query($dados_usuario)){

                    while ($row =$resultadousuario->fetch_assoc())  {
                        $dados_nome_so = "SELECT * FROM usuarios";
                        echo '  <tr><td>' . $row["id_user"] . '</td>';
                        echo '  <td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["usuario"] . '</td>';

                        


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
                mysqli_close($db);
                ?>


                </tbody>
            </table>
        </div>
    </div><div class="panel-footer" align="right"></div>
</div>
</div>


</body>
<br><br><br><br><br><br><br><br><br>

<?php
require_once("../../footer.php")
?>