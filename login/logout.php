<?php
session_start(); //iniciamos a sess�o que foi aberta
session_unset(); //limpamos as variaveis globais das sess�es
echo "<script>alert('Voc� saiu!');top.location.href='/patri/login/login.php';</script>";
?>