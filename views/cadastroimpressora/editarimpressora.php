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
    <title>Atualização de Impressoras</title>
</head>

<?php
require_once ("../../conexao.php");
$id = $_GET['id_impressora'];
$id_status=$_GET['id_status'];



$port_serial = $_GET['port_serial'];
$wifi=$_GET['wifi'];
$paralela = $_GET['paralela'];
$lan=$_GET['lan'];
$usb=$_GET['usb'];



$sql = "SELECT * FROM impressora LEFT JOIN local ON impressora.id_local = local.id_local
                                                             LEFT JOIN modelo ON impressora.id_modelo = modelo.id_modelo
                                                             LEFT JOIN fabricante ON impressora.id_fabricante = fabricante.id_fabricante
                                                             LEFT JOIN status ON impressora.id_status = status.id_status WHERE id_impressora= $id" ;

$dados_impressora = mysqli_query($db, $sql);
$row = $dados_impressora->fetch_assoc();
?>

<body>

<br>
<div class="col-xs-12"  >
    <div class="panel " class="container">

        <div class="panel-heading">
            <label><div class="" align="left">Atualização de cadastro de impressoras   </label></div>
        <hr>
        <div class="col-xs-12">
            <div class="panel-body">

                <form  class="form-horizontal" action="salvarimpressora.php " method="GET">


                    <div class="col-md-3">
                        <label> Nome: </label>
                        <a data-toggle="popover" data-trigger="hover" data-content="Informe corretamente o nome deste computador">?</a>

                        <input class="form-control" type="text" name="nome" value="<?php echo $row['nome_impressora']?>" required/>
                    </div>


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
                        <label>Contagem atual:</label>
                        <input class="form-control" type="number" name="contagem_atual" value="<?php echo $row['con_atual']?>"/>
                    </div>

                    <div class="col-md-3">
                        <label>Numero de Patrimônio:</label>
                        <input class="form-control" type="number" name="num_patrimonio" value="<?php echo $row['num_patrimonio']?>" />
                    </div>
                    <div class="col-md-3">
                        <label>Numero de série:</label>
                        <input class="form-control" type="text" name="num_serie" />
                    </div>






                    <div class="col-md-3">
                        <label>Comentário:</label>
                        <textarea class="form-control" rows="3" type="text" name="coment"/><?php echo $row['comentario'] ?></textarea>
                    </div>



                    <div class="col-md-10">
                        <label>Possui: </label>
                    </div>
                    <div class="col-md-10">


                        <label class="checkbox-inline">
                            <input type="hidden" name="port_serial" value="0">
                            <input type="checkbox" name="port_serial" <?php if ($port_serial==1){ echo "checked='checked'";} ?>  value="1"> Porta serial
                        </label>
                        <label class="checkbox-inline">
                            <input type="hidden" name="usb" value="0">
                            <input type="checkbox"  name="usb" <?php if ($usb==1){ echo "checked='checked'";} ?> value="1"> Usb
                        </label>
                        <label class="checkbox-inline">
                        <input type="hidden" name="paralela" value="0">
                            <input type="checkbox"  name="paralela" <?php if ($paralela==1){ echo "checked='checked'";} ?> value="1"> Paralela
                        </label>
                        <label class="checkbox-inline">
                         <input type="hidden" name="wifi" value="0">
                            <input type="checkbox"  name="wifi" <?php if ($wifi==1){ echo "checked='checked'";} ?>  value="1"> Wifi
                        </label><label class="checkbox-inline">
                         <input type="hidden" name="lan" value="0">
                            <input type="checkbox"  name="lan" <?php if ($lan==1){ echo "checked='checked'";} ?>  value="1"> Lan




                    </div>

                    <div class="col-md-12">
                        <br>
                    </div>

                    <div class="col-md-12">
                        <label>Stats: </label>
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
                    </div>










    </div>
</div>
</div>
</div>
<div class="col-md-1">
    <button title="Voltar" class="btn btn-primary" onClick="history.go(-1)"><spam class="glyphicon glyphicon-arrow-left"></spam> VOLTAR</button>

</div>
<div class="col-md-10">

    

    <input class="btn btn-success btn-sm" type="hidden"  name="id_status" id="<?php echo $id_status ?>" value="<?php echo $id_status?>">
    <button class="btn btn-success" type="submit"  name="id_impressora"  value='<?php echo $_GET['id_impressora'] ?>'>ATUALIZAR</button>
    </form>

</div>

    


<div class="col-md-1">
    <form  class="form-horizontal" action="deletarimpressora.php " method="GET">
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
                
                        <label>Deseja mesmo deletar este Impressora?</label>
                </div>
                <div class="modal-footer">
                    <button title="Deletar computador" class="btn btn-danger" type="submit"  name="id_impressora"   value='<?php echo $_GET['id_impressora'] ?>'>Excluir</button>
    
                </div>
                </form>
            </div>

        </div>
    </div>
        <button class="btn btn-danger excluir" type="submit"  name="id_impressora"  value='<?php echo $_GET['id_impressora'] ?>' data-toggle="modal" data-target="#ModalExcluir"> <span  class="glyphicon glyphicon-trash"></span></button>
         </div>

</div>


</form>
</div>
</div>
</body>

<?php
require_once("../../footer.php")
?>
</html>