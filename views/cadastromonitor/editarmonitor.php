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
    <title>Cadastro Computador</title>
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
    <input class="form-control" type="text" name="num_patrimonio" />
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
        <label>Responsável:</label>
        <input class="form-control" type="text" name="responsavel" value="<?php echo $row['responsavel'];?>" />
</div>




<div class="col-md-3">  
        <label>Comentário:</label>
        <textarea class="form-control" rows="3" type="text" name="coment"/><?php echo $row['comentario'] ?></textarea>
    </div>

<div class="col-md-3">  
 <label>Possui: </label>
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


<div class="col-md-10">  
 <label>Possui: </label>
 </div>
 <div class="col-md-10">
<label class="checkbox-inline">
  <input type="checkbox" name="hdmi" <?php if ($hdmi==1){ echo "checked='checked'";} ?> value="1"> HDMI
</label>
<label class="checkbox-inline">
  <input type="checkbox"  name="vga" <?php if ($vga==1){ echo "checked='checked'";} ?> value="1"> VGA
</label>
<label class="checkbox-inline">
  <input type="checkbox"  name="dvi" <?php if ($dvi==1){ echo "checked='checked'";} ?> value="1"> DVI
</label>
<label class="checkbox-inline">
  <input type="checkbox" name="displayport" <?php if ($displayport==1){ echo "checked='checked'";} ?> value="1"> Displayport
</label><label class="checkbox-inline">
  <input type="checkbox" name="autofalante" <?php if ($autofalante==1){ echo "checked='checked'";} ?> value="1"> Auto Falante
</label><label class="checkbox-inline">
  <input type="checkbox" name="microfone" <?php if ($microfone==1){ echo "checked='checked'";} ?> value="1"> Microfone
</label><label class="checkbox-inline">
  <input type="checkbox" name="webcam" <?php if ($webcam==1){ echo "checked='checked'";} ?> value="1"> Webcam

</div>
            
 <div class="col-md-12">
 </div>


  <div class="col-md-1">

          <input class="btn btn-success btn-sm" type="hidden"   name="hdmi" id="<?php echo $hdmi ?>" value="<?php echo $hdmi ?>"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="dvi" id="<?php echo $dvi ?>" value="<?php echo $dvi ?>"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="vga" id="<?php echo $hdmi ?>" value="<?php echo $hdmi ?>"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="displayport" id="<?php echo $displayport ?>" value="<?php echo $displayport ?>"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="autofalante" id="<?php echo $autofalante ?>" value="<?php echo $autofalante ?>"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="microfone" id="<?php echo $microfone ?>" value="<?php echo $microfone ?>"/>
          <input class="btn btn-success btn-sm" type="hidden"  name="webcam" id="<?php echo $webcam ?>" value="<?php echo $webcam ?>">
          <input class="btn btn-success btn-sm" type="hidden"  name="id_status" id="<?php echo $id_status ?>" value="<?php echo $id_status?>">
          
                  <button class="btn btn-success" type="submit"  name="id_monitor"  value='<?php echo $_GET['id_monitor'] ?>'>ATUALIZAR</button>
        </form>

</div>
        <form  class="form-horizontal" action="deletarmonitor.php " method="GET">
      <div class="col-md-1  "
          <br><button class="btn btn-danger excluir" type="submit"  name="id_monitor"  value='<?php echo $_GET['id_monitor'] ?>'>DELETAR</button>

      </div>


      </form>

     
      
<br>


</div>
</div>
</div>
</div>
</div>
</div>
</body>

<?php
require_once("../../footer.php")
?>
</html>