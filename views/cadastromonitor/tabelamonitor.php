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

    <form action="pdf_monitor.php">
    <button  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createModal">
        <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Relatório
    </button></form>

    <p></p>
    <legend></legend>



<div class="panel  panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-male fa-fw"></i>Monitores</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Fabricante</th>
                    <th>Local</th>
                    <th>HDMI</th>
                    <th>VGA</th>
                    <th>DVI</th>
                    <th>Displayport</th>
                    <th>Auto Falante</th>
                    <th>Microfone</th>
                    <th>Webcam</th>
                    <th>Comentario</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>



                     <?php
                     $dados_monitor = "SELECT * FROM monitor LEFT JOIN local ON monitor.id_local = local.id_local
                                                             LEFT JOIN modelo ON monitor.id_modelo = modelo.id_modelo
                                                             LEFT JOIN fabricante ON monitor.id_fabricante = fabricante.id_fabricante
                                                             LEFT JOIN status ON monitor.id_status = status.id_status" ;
                     $resultadomonitor = mysqli_query($db,$dados_monitor);

                     if($db->query($dados_monitor)){
                         while ($row =$resultadomonitor->fetch_assoc()) {
                             echo '  <tr><td>'. $row["id_monitor"].'</td>';
                             echo '<td>' . $row["modelo"] . '</td>';
                             echo '<td>' . $row["nome_fabricante"] . '</td>';
                             echo '<td>' . $row["nome_local"] . '</td>';
            

                             if ($row["hdmi"] == 1){
                                 echo '<td>sim</td>';
                             } else {
                                $row["hdmi"] = 0;
                                 echo '<td>não</td>';

                             }
                             if ($row["vga"] == 1){
                                 echo '<td>sim</td>';
                             } else {
                                $row["vga"] = 0;
                                 echo '<td>não</td>';

                             }

                              if ($row["dvi"] == 1){
                                 echo '<td>sim</td>';
                             } else {
                                $row["dvi"] = 0;
                                 echo '<td>não</td>';

                             }
                              if ($row["displayport"] == 1){
                                 echo '<td>sim</td>';
                             } else {
                                $row["displayport"] = 0;
                                 echo '<td>não</td>';

                             }
                              if ($row["autofalante"] == 1){
                                 echo '<td>sim</td>';
                             } else {
                                $row["autofalante"] = 0;
                                 echo '<td>não</td>';

                             }
                             if ($row["microfone"] == 1){
                                 echo '<td>sim</td>';
                             } else {
                                $row["microfone"] = 0;
                                 echo '<td>não</td>';

                             }
                             if ($row["webcam"] == 1){
                                 echo '<td>sim</td>';
                             } else {
                                $row["webcam"] = 0;
                                 echo '<td>não</td>';

                             }

                             echo '<td>' . $row["comentario"] . '</td>';
                             echo '<td>' . $row["nome_status"] . '</td>';


                                  echo '<td align="center">
                        
    <form  action="editarmonitor.php" method="GET">


          <input class="btn btn-success btn-sm" type="hidden"   name="hdmi" id='.$row["hdmi"].' value="'.$row["hdmi"].'"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="dvi" id='.$row["dvi"].' value="'.$row["dvi"].'"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="vga" id='.$row["vga"].' value="'.$row["vga"].'"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="displayport" id='.$row["displayport"].' value="'.$row["displayport"].'"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="autofalante" id='.$row["autofalante"].' value="'.$row["autofalante"].'"/>
          <input class="btn btn-success btn-sm" type="hidden"   name="microfone" id='.$row["microfone"].' value="'.$row["microfone"].'"/>
          <input class="btn btn-success btn-sm" type="hidden"  name="webcam" id='.$row["webcam"].' value='.$row["webcam"].'>
          <input class="btn btn-success btn-sm" type="hidden"  name="id_status" id='.$row["id_status"].' value='.$row["id_status"].'>
          <button class="btn btn-success btn-sm" type="submit"  name="id_monitor" id='.$row["id_monitor"].' value='.$row["id_monitor"].'>Editar</button>

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
    </div><div class="panel-footer"></div>
</div>
</div>







</body>
    <br><br><br><br>

<?php
require_once("../../footer.php")
?>