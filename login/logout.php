<?php
session_start(); //iniciamos a sess�o que foi aberta
session_unset(); //limpamos as variaveis globais das sess�es
echo "<script>alert('Volte sempre!'); top.location.href='/patri/login/login.php';</script>";
?>