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
    <title>Atualização de Computador</title>
</head>

<?php
require_once ("../../conexao.php");
$id = $_GET['id_pc'];
$id_status=$_GET['id_status'];

$sql= "SELECT * FROM computador LEFT JOIN local ON computador.id_local = local.id_local
                                                      LEFT JOIN sistema_operacional ON computador.id_so = sistema_operacional.id_so
                                                      LEFT JOIN fabricante ON computador.id_fabricante = fabricante.id_fabricante
                                                      LEFT JOIN modelo ON computador.id_modelo = modelo.id_modelo
                                                      LEFT JOIN status ON computador.id_status = status.id_status WHERE id_computador= $id";
$dados_pc = mysqli_query($db, $sql);
$row = $dados_pc->fetch_assoc();

?>

<script type="text/javascript">
    $(function(){
        $("a.excluir").click(function(){
            return confirm('Tem certeza que deseja excluir esse item?');
        });
    });
</script>

<body>

<br>
<div class="col-xs-12"  >
    <div class="panel " class="container">

        <div class="panel-heading">
            <label><div class="" align="left">Atualização do computador : <?php echo $row['nome']  ?>   </label></div>
        <hr>
        <div class="col-xs-12">
            <div class="panel-body">

                <form  class="form-horizontal" action="salvarpc.php " method="post">

                    <input class="form-control" type="hidden" name="id_pc" value="<?php echo $row['id_computador'] ?>" />



                    <div class="col-md-3">
                        <label>Nome:</label>
                        <input class="form-control" type="text" name="nome" value="<?php echo $row['nome'] ?>" />
                    </div>

                    <div class="col-md-3">
                        <label>Numero de série:</label>
                        <input class="form-control" type="text" name="num_serie" value="<?php echo $row['num_serie'] ?>" />
                    </div>

                    <div class="col-md-3 ">
                        <label>Sistema Operacional:</label>
                        <select class="form-control" name=so >
                            <option value="<?php echo $row['id_so']?>"><?php echo $row['nome_so'] ?></option>
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
                        <input class="form-control" type="text" name="serial_so" value="<?php echo $row['serial_so'] ?>" />
                    </div>


                    <div class="col-md-3">
                        <label>Numero de Patrimônio:</label>

                        <input class="form-control" type="text" name="num_patrimonio" value="<?php echo $row['num_patrimonio'] ?>" />
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
                        <label>Responsável:</label>
                        <input class="form-control" type="text" name="responsavel" value="<?php echo $row['nome_responsavel'] ?>"/>
                    </div>






                    <div class="col-md-3">
                        <label>Comentário:</label>
                        <textarea class="form-control" rows="3" type="text" name="coment"/><?php echo $row['comentario'] ?></textarea>
                    </div>


                    <div class="col-md-12">
                        <label>Status:</label>
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
    <input class="btn btn-success"  type="submit"  value="ATUALIZAR"/>
    </form>
</div>
<div class="col-md-1">
    <form  class="form-horizontal" action="deletarpc.php " method="GET">
        <button class="btn btn-danger excluir" type="submit"  name="id_pc"  value='<?php echo $_GET['id_pc'] ?>'>DELETAR</button>
    </form>
    </div>
<div class="col-md-5">
    <button class="btn btn-primary" href=".." '>VOLTAR</button>

</div>
</div>
</div>

</body>

<?php
require_once("../../footer.php")
?>
</html>