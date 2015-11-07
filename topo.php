<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
<head>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link href="../../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="../../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../css/bootstrap/js/jquery-1.11.3.min.js"></script>
</head>

<script>(function($){
        $(document).ready(function(){
            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass('open');
                $(this).parent().toggleClass('open');
            });
        });
    })(jQuery);
</script>
<nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="../../views/index/index.php" class="navbar-brand">SIS-Patrimoio</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
      
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventário</a>
                        <ul class="dropdown-menu">
                            <li ><a href="../../views/cadastropc/computador.php">Computador</a>
                               </li>
                            <li><a href="../../views/cadastroimpressora/impressora.php">Impressora</a></li>
                            <li><a href="../../views/cadastromonitor/monitor.php">Monitor</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatórios</a>
                        <ul class="dropdown-menu">
                            <li><a href="../../views/cadastropc/tabelapc.php">Computadores</a></li>
                            <li><a href="../../views/cadastroimpressora/tabelaimpressora.php">Impressoras</a></li>
                            <li><a href="../../views/cadastromonitor/tabelamonitor.php">Monitores</a></li>
                            <li class="divider"></li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                                    <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

















            <li class="dropdown"><a href="#" class="dropdown-submenu" data-toggle="dropdown">Cadastro <b class="caret"></b></a>
                <ul class="dropdown-menu">

                            <li ><a href="../../views/cadastropc/computador.php">Novo Computador</a>
                            </li>
                            <li><a href="../../views/cadastroimpressora/impressora.php">Nova Impressora</a></li>
                            <li><a href="../../views/cadastromonitor/monitor.php">Novo Monitor</a></li>
                    <li class="divider"></li>
                    <li ><a href="../../views/cadastropc/computador.php">Fabricante</a>
                    </li>
                    <li><a href="../../views/cadastroimpressora/impressora.php">Modelo</a></li>
                    <li><a href="../../views/cadastromonitor/monitor.php">Local</a></li>
                    <li><a href="../../views/cadastroimpressora/impressora.php">Sistema Operacional</a></li>
                        </ul>
                    </li>


            <li class="dropdown"><a href="#" class="dropdown-submenu" data-toggle="dropdown">Relatórios <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                    <li><a href="../../views/cadastropc/tabelapc.php">Computadores</a></li>
                    <li><a href="../../views/cadastroimpressora/tabelaimpressora.php">Impressoras</a></li>
                    <li><a href="../../views/cadastromonitor/tabelamonitor.php">Monitores</a></li>

                </ul>
            </li>










            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="../../views/cadastrouser/cadastro.php">Cadastro de usuario</a></li>
                    <li><a href="#">Dropdown Link 2</a></li>
                    <li><a href="#">Dropdown Link 3</a></li>
                    <li class="divider"></li>
                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                            <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                            <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                            <li><a href="#">Dropdown Submenu Link 4.4</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                            <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                            <li><a href="#">Dropdown Submenu Link 5.3</a></li>
                            <li class="divider"></li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                                    <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
                                            <li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>

            </li>

        </ul>

<ul class="nav navbar-nav navbar-right" style="padding-right: 15px">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php
echo "Olá, " . $_SESSION['usuarioNome'];?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../login/logout.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>
    </div><!-- /.navbar-collapse -->


</nav>
