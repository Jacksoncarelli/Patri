<?php

require_once ('../../conexao.php');

$dados_impressora = 'SELECT * FROM impressora';
$resultadoimpressora = mysqli_query($db,$dados_impressora);
$dados_serial = 'SELECT serial_so FROM computador';
$dados_nome_fabricante = 'SELECT nome_fabricante FROM fabricante';
$dados_modelo = 'SELECT modelo FROM modelo';
$dados_nome_local = 'SELECT nome_local FROM local';
$dados_nome_status = 'SELECT nome_status FROM status';

include('../../mpdf/mpdf.php');

$tabela= '
<style>
table{
    background: #ffffff;
}
table.bordasimples {border-collapse: collapse;}

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
<div align="center"> LISTA DE IMPRESSORAS CADASTRADOS </div>
<br>
<br>
<table width="60%" cellpadding="5" align="center" class="bordasimples">
                <thead>
                <tr>
                   <th>ID</th>
                    <th>Patrimonio</th>
                    <th>Série</th>
                    <th>Contagem Atual</th>
                    <th>Porta serial</th>
                    <th>Usb</th>
                    <th>Wifi</th>
                    <th>Lan</th>
                    <th>Paralela</th>
                    <th>Fabricante</th>
                    <th>Modelo</th>
                    <th>Local</th>
                    <th>Comentário</th>
                    <th>Status</th>
                </tr>
                </thead><tbody> ';
if($db->query($dados_impressora)){
    while ($row =$resultadoimpressora->fetch_assoc())  {
        $tabela .= '<tr><td>'.$row['id_impressora'] . '</td>';
        $tabela .='<td>'.$row['num_patrimonio'] . '</td>';
        $tabela .='<td>'.$row['num_serie'] . '</td>';
        $tabela .='<td>'.$row['con_atual'] . '</td>';
        $tabela .='<td>'.$row['port_serial'] . '</td>';
        $tabela .='<td>'.$row['usb'] . '</td>';
        $tabela .='<td>'.$row['wifi'] . '</td>';
        $tabela .='<td>'.$row['lan'] . '</td>';
        $tabela .='<td>'.$row['paralela'] . '</td>';
        $tabela .='<td>'.$row['id_fabrincante'].'</td>';
        $tabela .='<td>'.$row['id_modelo'].'</td>';
        $tabela .='<td>'.$row['id_local'].'</td>';
        $tabela .='<td>'.$row['comentario'] . '</td>';
        $tabela .='<td>'.$row['id_status'].'</td>';


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