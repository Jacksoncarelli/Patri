<?php
include("../../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página

?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">

    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../css/bootstrap/js/jquery-1.11.3.min.js"></script>
    <title>Cadastro de Monitores</title>
</head>

<?php
require_once("../../topo.php");
?>


<body>

<br>
<div class="col-xs-12">
    <div class="panel ">

        <div class="panel-heading">
            <label><div class="" align="left">Cadastro de monitores</label></div>
        <hr>
        <div class="col-xs-12">
            <div class="panel-body">

                <form  class="form-horizontal" action="inserirmonitor.php " method="post">




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
                                <?php
                            }
                            ?>
                        </select>
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
                        <label>Tamanho:</label>
                        <input class="form-control"  type="number" name="tamanho" required/></input>
                    </div>


<div class="col-md-12">
    <br>
</div>

<div class="col-md-3">
                        <label>Numero de Patrimônio:</label>
                        <input class="form-control" type="text" name="num_patrimonio" />
                    </div>

<div class="col-md-3">
                        <label>Numero de série:</label>
                        <input class="form-control" type="text" name="num_serie" />
                    </div>

                    


                    <div class="col-md-3">
                        <label>Comentário:</label>
                        <textarea class="form-control"  rows="3" type="text" name="coment"/></textarea>
                    </div>




                    <div class="col-md-10">
                        <label>Possui: </label>
                    </div>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                        <input type="hidden" name="hdmi" value="0">
                            <input type="checkbox" name="hdmi" value="1"> HDMI
                        </label>
                        <label class="checkbox-inline">
                        <input type="hidden" name="vga" value="0">
                            <input type="checkbox"  name="vga" value="1"> VGA
                        </label>
                        <label class="checkbox-inline">
                        <input type="hidden"  name="dvi" value="0">
                            <input type="checkbox"  name="dvi" value="1"> DVI
                        </label>
                        <label class="checkbox-inline">
                        <input type="hidden"  name="displayport" value="0">
                            <input type="checkbox" name="displayport" value="1"> Displayport
                        </label>
                        <label class="checkbox-inline">
                        <input type="hidden"  name="autofalante" value="0">
                            <input type="checkbox" name="autofalante" value="1"> Auto Falante
                        </label>
                        <label class="checkbox-inline">
                        <input type="hidden"  name="microfone" value="0">
                            <input type="checkbox" name="microfone" value="1"> Microfone
                        </label>
                        <label class="checkbox-inline">
                        <input type="hidden"  name="webcam" value="0">
                            <input type="checkbox" name="webcam" value="1"> Webcam

                    </div>
                    <div class="col-md-12">
                        <br>
                    </div>

                    <div class="col-md-12">
                        <label>Status:</label>
                    </div>
                    <div class="col-md-4">
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
                    <br><br>








                <br>


            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <br><input class="btn btn-primary " type="submit" value="CADASTRAR"/>
</div>
</form>
</div>
</div>
</body>
<script src="../../css/bootstrap/js/validaform.js"></script>



</html>
<?php
require_once("../../footer.php")
?>