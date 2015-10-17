<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/menu.css">

<head>
<title>Sistema de Inventário</title>
</head>

<ul id="menu">
    <div align="right" style="color: #aeaeae; font-family: verdana;" ">
    <?php 
    
    echo "Olá, (" . $_SESSION['usuarioNome'].")";
    ?>,  Seja vem vindo! 
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </div>

    <li>
        <a href="../../views/index/index.php">Inicio</a>
        <ul>
            <li><a href="/patri/login/logout.php">Sair</a></li>
            
        </ul>

    </li>
    <li>
        <a href="#">Cadastro</a>
        <ul>
            <li><a href="../../views/cadastrouser/cadastro.php">&nbsp&nbsp&nbsp&nbsp&nbspCadastrar Usuario&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbspConsulta&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbspAquisição&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbspBaixa&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
        </ul>
    </li>
    <li>
    <a href="#">Transferência</a>
        <ul>
            <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbspTransferir itens&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbspEnviados&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbspRecebidos&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Listagens</a>
        <ul>
            <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbspTransferências&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="#">&nbsp&nbsp&nbsp&nbsp&nbspCadastro&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
        </ul>
        </li>
    <li><a href="#">Sobre</a></li>
    <li><a href="#">Contato </a></li>
<a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a>
    <li><a href="/patri/login/logout.php">Sair</a></li>
</ul>
