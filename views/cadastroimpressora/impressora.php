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

<script>
    function getFabricante(val) {
        $.ajax({
            type: "POST",
            url: "get_modelo.php",
            data:'fabricante_id='+val,
            success: function(data){
                $("#modelo-list").html(data);
            }
        });
    }
</script>


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
                        <select class="form-control" name=fabricante id="fabricante-list" onChange="getFabricante(this.value);">
                            <option >Selecione uma opção</option>

                            <?php
                            foreach($results as $country) {
                                ?>
                                <option value="<?php echo $country["id_fabricante"]; ?>"><?php echo $country["nome_fabricante"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>



                    <div class="col-md-3">
                        <label>Modelo:</label>
                        <select class="form-control" name=modelo id="modelo-list" >
                            <option >Selecione uma opção</option>
                        </select>
                    </div>



                    <div class="col-md-3">
                        <label>Contagem atual:</label>
                        <input class="form-control" type="text" name="contagem_atual" />
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
                        <label>Responsável:</label>
                        <input class="form-control" type="text" name="responsavel" />
                    </div>






                    <div class="col-md-3">
                        <label>Comentário:</label>
                        <textarea class="form-control" rows="2" type="text" name="coment"/></textarea>
                    </div>




                    <div class="col-md-12">
                        <label>Possui: </label>
                    </div>

                    <div class="col-md-6">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="port_serial" value="1"> Porta serial
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox"  name="usb" value="1"> Usb
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox"  name="paralela" value="1"> Paralela
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox"  name="wifi" value="1"> Wifi
                        </label><label class="checkbox-inline">
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
                            <input type="radio" name="status"  value="1"> Ativo
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status"  value="2"> Estoque
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status"  value="3"> Danificado
                        </label>
                    </div>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $('#exampleModal').on('show.bs.modal', function (event) {
                            var button = $(event.relatedTarget) // Button that triggered the modal
                            var recipient = button.data('whatever') // Extract info from data-* attributes
                            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                            var modal = $(this)
                            modal.find('.modal-title').text('New message to ' + recipient)
                            modal.find('.modal-body input').val(recipient)
                        })
                    </script>
                    <br>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <br><input class="btn btn-primary " type="submit" value="CADASTRAR"/>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Exemplo de modal</button>
    </div>
    </form>
</div>
</div>
<?php
require_once("../../footer.php")
?>
</body>





</html>