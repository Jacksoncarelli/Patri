<?php
include("../../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página

?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../css/bootstrap/js/jquery-1.11.3.min.js"></script>

    <title>Cadastro de Impressoras</title>
</head>
<body>
<?php
require_once("../../topo.php");
?>




<br>
<div class="col-xs-12">
    <div class="panel">

        <div class="panel-heading">
            <label><div class="" align="left">Cadastro de impressoras</label></div>
        <hr>
        <div class="col-xs-12">
            <div class="panel-body">

                <form  class="form-horizontal" action="inseririmpressora.php " method="post">

                    <div class="col-md-3">
                        <label>local:</label>
                        <select class="form-control" name=local required>
                            <option disabled selected>Selecione uma opção</option>
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
                        <!--                        onchange="getFabricante()"-->
                        <select class="form-control" name=fabricante id="fabricante-list"  >
                            <option >Selecione uma opção</option>

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
                        <select class="form-control" name=modelo id="modelo-list" >
                            <option >Selecione uma opção</option>
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



                    <div class="col-md-3">
                        <label>Contagem atual:</label>
                        <input class="form-control" type="number" name="contagem_atual" />
                    </div>



                    <div class="col-md-12">
                        <br>
                    </div>


                    <div class="col-md-3">
                        <label >Numero de Patrimônio:</label>
                        <input class="form-control" type="text" name="num_patrimonio" />
                    </div>


                    <div class="col-md-3">
                        <label>Numero de série:</label>
                        <input class="form-control" type="text" name="num_serie" />
                    </div>



                    <div class="col-md-3">
                        <label>Comentário:</label>
                        <textarea class="form-control" rows="2" type="text"  name="coment"/></textarea>
                    </div>




                    <div class="col-md-12">
                        <label>Possui: </label>
                    </div>

                    <div class="col-md-6">
                        <label class="checkbox-inline">
                            <input type="hidden" name="port_serial" value="0">
                            <input type="checkbox" name="port_serial" value="1"> Porta serial
                        </label>
                        <label class="checkbox-inline">
                            <input type="hidden" name="usb" value="0">
                            <input type="checkbox"  name="usb" value="1"> Usb
                        </label>
                        <label class="checkbox-inline">
                            <input type="hidden" name="paralela" value="0">
                            <input type="checkbox"  name="paralela" value="1"> Paralela
                        </label>
                        <label class="checkbox-inline">
                            <input type="hidden" name="wifi" value="0">
                            <input type="checkbox"  name="wifi" value="1"> Wifi
                        </label><label class="checkbox-inline">
                            <input type="hidden" name="lan" value="0">
                            <input type="checkbox"  name="lan" value="1"> Lan
                    </div>

                    <div class="col-md-12">
                        <br>
                    </div>

                    <div class="col-md-12">
                        <label>Status:</label>
                    </div>
                    <div class="col-md-3">
                        <label class="radio-inline">
                            <input type="radio" name="status"  value="1" checked="checked"> Ativo
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status"  value="2"> Estoque
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status"  value="3"> Danificado
                        </label>
                    </div>


            </div>
        </div>
    </div>
    <div class="col-md-10">
        <br><input class="btn btn-primary" type="submit" value="CADASTRAR"/>
<!--        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Exemplo de modal</button>-->
    </div>
    </form>
</div>
</div>
<script>




    function getFabricante() {
        var val=$('#fabricante-list').val();
        $.ajax({
            method: "get",
            url: "get_modelo.php",
            data: 'id=' + val,
            success: function (data) {

                console.log(data);

            }
        });

        $.get('get_modelo.php','')
    }


</script>
</body>
<script src="../../css/bootstrap/js/validaform.js"></script>

<?php
require_once("../../footer.php")
?>






</html>
