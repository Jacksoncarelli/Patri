<?php

require_once ('../../conexao.php');

                     $dados = "SELECT * FROM monitor";
                     $resultadomonitor = mysqli_query($db,$dados);
                     $dados0 = "SELECT modelo FROM modelo";
                     $resultadomonitor0 = mysqli_query($db,$dados0);

include('../../mpdf/mpdf.php');

$tabela= '
<style>
table{
    background: #ffffff;
}
table.bordasimples {border-collapse: collapse; }

table.bordasimples tr td {border:1px solid #020101;}

table td {
    border: 1px solid black;
}

table th {
    border: 1px solid black;
    background: #bad1ff;
}
</style>
<br><br>
<br>
<div align="center"> LISTA DE MONITORES CADASTRADOS </div>
<br>
<br>
<table width="60%" cellpadding="5" align="center" class="bordasimples">
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
                </tr>
                </thead><tbody> ';

if($db->query($dados)){
            while ($row =$resultadomonitor->fetch_assoc()) {
               $tabela .='  <tr><td>'. $row["id_monitor"].'</td>';
               $tabela .='<td>' . $row["id_modelo"] . '</td>';
               $tabela .='<td>' . $row["id_fabricante"] . '</td>';
               $tabela .='<td>' . $row["id_local"] . '</td>';
               $tabela .='<td>' . $row["hdmi"] . '</td>';
               $tabela .='<td>' . $row["vga"] . '</td>';
               $tabela .='<td>' . $row["dvi"] . '</td>';
               $tabela .='<td>' . $row["displayport"] . '</td>';
               $tabela .='<td>' . $row["autofalante"] . '</td>';
               $tabela .='<td>' . $row["microfone"] . '</td>';
               $tabela .='<td>' . $row["webcam"] . '</td>';
               $tabela .='<td>' . $row["comentario"] . '</td>';
               $tabela .='<td>' . $row["id_status"] . '</td>';

    }

    $tabela .= '</tbody></table>';
}


mysqli_close($db);

// Define a default Landscape page size/format by name
$mpdf=new mPDF('utf-8', 'A4-L');
$mpdf->WriteHTML($tabela);
$mpdf->Output();
exit;
?>