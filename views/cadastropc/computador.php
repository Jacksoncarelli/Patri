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



    <title>Cadastro de Computador</title>

</head>
<body>

<br>
<div class="col-xs-12"  >
    <div class="panel " class="container">

        <div class="panel-heading">
            <label><div class="" align="left">Cadastro de computadores</label></div>
        <hr>
        <div class="col-xs-12">
            <div class="panel-body">

                <form  class="form-horizontal" action="inserirpc.php " method="post">

                    <div class="col-md-3">
                        <label> Nome: </label>
                        <a data-toggle="popover" data-trigger="hover" data-content="Informe corretamente o nome deste computador">?</a>

                        <input class="form-control" type="text" name="nome" required/>
                    </div>

                    <div class="col-md-3">
                        <label>Numero de série:</label>
                        <input class="form-control" type="text" name="num_serie" />
                    </div>

                    <div class="col-md-3 ">
                        <label>Sistema Operacional:</label>
                        <select class="form-control" name=so required>
                            <option disabled selected>Selecione uma opção</option>
                            <?php
                            $sistemas=mysql_query("SELECT nome_so,id_so FROM sistema_operacional");
                            while($tbl=mysql_fetch_array($sistemas)){
                                $nome_sistemas=$tbl['nome_so'];
                                $id=$tbl['id_so'];
                                ?>
                                <option value="<?php echo $id?>">
                                    <?php echo $nome_sistemas ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label>Serial do SO:</label>
                        <input class="form-control" type="text" name="serial_so"/>
                    </div>

                    <div class="col-md-12">
                        <br>
                    </div>

                    <div class="col-md-3">
                        <label>Numero de Patrimônio:</label>
                        <input class="form-control" type="text" name="num_patrimonio" onl/>
                    </div>

                    <div class="col-md-3">
                        <label>Fabricante:</label>
                        <select class="form-control" name=fabricante required>
                            <option disabled selected>Selecione uma opção</option>
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
                            <option disabled selected>Selecione uma opção</option>
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


                    <div class="col-md-12">
                        <br>
                    </div>

                    <div class="col-md-3">
                        <label>Usuário responsável:</label>
                        <input class="form-control" type="text" name="responsavel" required />
                    </div>






                    <div class="col-md-3">
                        <label>Comentário:</label>
                        <textarea class="form-control" rows="3" type="text" name="coment"/></textarea>
                    </div>


                    <div class="col-md-12">
                        <label>Status:</label>
                    </div>
                    <div class="col-md-5">

                        <label class="radio-inline">
                            <input type="radio" name="status" id="inlineRadio1" value="1" checked="checked"> Ativo
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" id="inlineRadio2" value="2"> Estoque
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" id="inlineRadio3" value="3"> Danificado
                        </label>
                    </div>






            </div>
        </div>
    </div>

</div>
<div class="col-md-12">
    <input class="btn btn-primary "  type="submit" value="CADASTRAR"/>
</div>
</form>
</div>


<?php
include ("../../footer.php");
?>
</body>


<script src="../../css/bootstrap/js/validaform.js"></script>

</html>

<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>