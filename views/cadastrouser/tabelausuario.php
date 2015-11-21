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
    <title>Tabela Usuários</title>
    <?php
    require_once ("../../conexao.php");
    ?>
</head>
<body>
<br><br>
<div id="wrap">
<div class="container">

<div class="container" >

    

    <div class="panel  panel-primary" >
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
                    <th width="20%">Opções</th>
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

                        


                         echo '<td >
                        <form  class="form-horizontal" action="deletarusuario.php " method="GET">
<div class="modal fade" id="ModalExcluir" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirmar exclusão</h4>
                </div>
                <div class="modal-body">

                        <label>Deseja mesmo deletar este usuario?</label>
                </div>
                <div class="modal-footer">
                    <button title="Deletar computador" class="btn btn-danger" type="submit"  name="id_user"   value='.$row["id_user"].'>Excluir</button>

                </div>
                </form>
            </div>

        </div>
    </div>

<div align="center">
  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalExcluir"  name="id_user" type="submit" value='.$row["id_user"].' ><span  class="glyphicon glyphicon-trash"></span> Deletar</button>
</div>

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
</div>
</div>
<?php
require_once("../../footer.php")
?>

</body>