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
    <link href="../../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../css/bootstrap/js/jquery-1.11.3.min.js"></script>
    <title>Atualização de Monitores</title>
</head>

<?php
require_once ("../../conexao.php");
$id = $_GET['id_monitor'];
$id_status=$_GET['id_status'];

$hdmi = $_GET['hdmi'];
$dvi=$_GET['dvi'];
$vga = $_GET['vga'];
$displayport=$_GET['displayport'];
$microfone = $_GET['microfone'];
$autofalante=$_GET['autofalante'];
$webcam = $_GET['webcam'];

$sql = "SELECT * FROM monitor LEFT JOIN local ON monitor.id_local = local.id_local
                                                             LEFT JOIN modelo ON monitor.id_modelo = modelo.id_modelo
                                                             LEFT JOIN fabricante ON monitor.id_fabricante = fabricante.id_fabricante
                                                             LEFT JOIN status ON monitor.id_status = status.id_status WHERE id_monitor= $id" ;


$dados_monitor = mysqli_query($db, $sql);
$row = $dados_monitor->fetch_assoc();
?>
<body>

<br>
<div class="col-xs-12"  >
    <div class="panel " class="container">

        <div class="panel-heading">
            <label><div class="" align="left">Atualização de cadastro de monitores   </label></div>
        <hr>
        <div class="col-xs-12">
            <div class="panel-body">

                <form  class="form-horizontal" action="salvarmonitor.php " method="GET">



                    <div class="col-md-3">
                        <label>local:</label>
                        <select class="form-control" name=local required>
                            <option value="<?php echo $row['id_local'] ?>"><?php echo $row['nome_local'] ?></option>
                            <?php
                            $sistemas=mysql_query("SELECT nome_local,id_local FROM local");
                            while($tbl=mysql_fetch_array($sistemas)){
                                $nome_sistemas=$tbl['nome_local'];
                                $id=$tbl['id_local'];
                                ?>
                                <option value="<?php echo $id?>">
                                    <?php echo $nome_sistemas ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label>Numero de Patrimônio:</label>
                        <input class="form-control" type="number" name="num_patrimonio" />
                    </div>

                    <div class="col-md-3">
                        <label>Fabricante:</label>
                        <select class="form-control" name=fabricante required>
                            <option value="<?php echo $row['id_fabricante'];?>"><?php echo $row['nome_fabricante'] ?></option>
                            <?php
                            $sistemas=mysql_query("SELECT nome_fabricante,id_fabricante FROM fabricante");
                            while($tbl=mysql_fetch_array($sistemas)){
                                $nome_sistemas=$tbl['nome_fabricante'];
                                $id=$tbl['id_fabricante'];
                                ?>
                                <option value="<?php echo $id?>">
                                    <?php echo $nome_sistemas ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="col-md-3">
                        <label>Modelo:</label>
                        <select class="form-control" name=modelo required>
                            <option value="<?php echo $row['id_modelo'];?>"><?php echo $row['modelo'] ?></option>
                            <?php
                            $sistemas=mysql_query("SELECT modelo,id_modelo FROM modelo");
                            while($tbl=mysql_fetch_array($sistemas)){
                                $nome_sistemas=$tbl['modelo'];
                                $id=$tbl['id_modelo'];
                                ?>
                                <option value="<?php echo $id?>">
                                    <?php echo $nome_sistemas ?></option>
                            <?php } ?>
                        </select>
                    </div>

<div class="col-md-12">
    <br>
</div>


                     <div class="col-md-3">
                        <label>Tamanho:</label>
                        <input class="form-control"  type="number" name="tamanho"/></input>
                    </div>


                    <div class="col-md-3">
                        <label>Comentário:</label>
                        <textarea class="form-control" rows="3" type="text" name="coment"/><?php echo $row['comentario'] ?></textarea>
                    </div>

<div class="col-md-12">
    <br>
</div>


                    <div class="col-md-10">
                        <label>Possui: </label>
                    </div>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                         <input type="hidden" name="hdmi" value="0">
                            <input type="checkbox" name="hdmi" <?php if ($hdmi==1){ echo "checked='checked'";} ?> value="1"> HDMI
                        </label>
                        <label class="checkbox-inline">
                         <input type="hidden" name="vga" value="0">
                            <input type="checkbox"  name="vga" <?php if ($vga==1){ echo "checked='checked'";} ?> value="1"> VGA
                        </label>

                        <label class="checkbox-inline">
                         <input type="hidden" name="dvi" value="0">
                            <input type="checkbox"  name="dvi" <?php if ($dvi==1){ echo "checked='checked'";} ?> value="1"> DVI
                        </label>
                        <label class="checkbox-inline">
                         <input type="hidden" name="displayport" value="0">
                            <input type="checkbox" name="displayport" <?php if ($displayport==1){ echo "checked='checked'";} ?> value="1"> Displayport
                        </label>
                        <label class="checkbox-inline">
                         <input type="hidden" name="autofalante" value="0">
                            <input type="checkbox" name="autofalante" <?php if ($autofalante==1){ echo "checked='checked'";} ?> value="1"> Auto Falante
                        </label>
                        <label class="checkbox-inline">
                         <input type="hidden" name="microfone" value="0">
                            <input type="checkbox" name="microfone" <?php if ($microfone==1){ echo "checked='checked'";} ?> value="1"> Microfone
                        </label>
                        <label class="checkbox-inline">
                         <input type="hidden" name="webcam" value="0">
                            <input type="checkbox" name="webcam" <?php if ($webcam==1){ echo "checked='checked'";} ?> value="1"> Webcam

                    </div>
                    <div class="col-md-12">
                        <br>
                    </div>


                    <div class="col-md-12">
                        <label>Status: </label>
                    </div>
                    <div class="col-md-5">
                        <label class='radio-inline'>
                            <input type='radio' <?php if ($id_status==1){ echo "checked='checked'";} ?> name='status' id='radio1' value='1'> Ativo
                        </label>
                        <label class='radio-inline'>
                            <input type='radio' <?php if ($id_status==2){ echo "checked='checked'";} ?> name='status' id='radio1' value='2'> Estoque
                        </label>
                        <label class='radio-inline'>
                            <input type='radio' <?php if ($id_status==3){ echo "checked='checked'";} ?> name='status' id='radio1' value='3'> Danificado
                        </label>
                    </div><div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">


<!--                        <div class="modal-dialog" role="document">-->
<!--                            <div class="modal-content">-->
<!--                                <div class="modal-header">-->
<!--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                                    <h4 class="modal-title" id="exampleModalLabel">Confirmar exclusão</h4>-->
<!--                                </div>-->
<!--                                <div class="modal-body">-->
<!--                                    <label>Tem certeza de que deseja excluir?</label>-->
<!---->
<!--                                </div>-->
<!--                                <div class="modal-footer">-->
<!---->
<!--                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>-->
<!--                                    <form  action="deletarmonitor.php " method="POST"> <button class="btn btn-danger excluir"  name="id_monitor"  value='--><?php //echo $_GET['id_monitor'] ?><!--'>Confirmar</button>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
            </div>
        </div>

    </div>

</div>

<div class="col-md-1">
    <button class="btn btn-primary" onClick="history.go(-1)"><spam class="glyphicon glyphicon-arrow-left"></spam> VOLTAR</button>

</div>
<div class="col-md-10">

    <button class="btn btn-success" type="submit"  name="id_monitor"  value='<?php echo $_GET['id_monitor'] ?>'>ATUALIZAR</button>
    </form>

</div>

    <div class="col-md-1">
    <form  class="form-horizontal" action="deletarmonitor.php " method="GET">
      <!-- Modal LOCAL -->
    <div class="modal fade" id="ModalExcluir" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirmar exclusão</h4>
                </div>
                <div class="modal-body">
                
                        <label>Deseja mesmo deletar este Monitor?</label>
                </div>
                <div class="modal-footer">
                    <button title="Deletar computador" class="btn btn-danger" type="submit"  name="id_monitor"   value='<?php echo $_GET['id_monitor'] ?>'>Excluir</button>
    
                </div>
                </form>
            </div>

        </div>
    </div>
        <button class="btn btn-danger excluir" type="submit"  name="id_monitor"  value='<?php echo $_GET['id_monitor'] ?>' data-toggle="modal" data-target="#ModalExcluir"> <span  class="glyphicon glyphicon-trash"></span></button>
         </div>

</form>





</div>
</div>
</body>

<?php
require_once("../../footer.php")
?>
</html>