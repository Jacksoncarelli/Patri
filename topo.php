<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
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



    <!-- Modal FABRICANTE -->
<form action="../../views/fabricante/inserirfabricante.php" method="POST">
    <div class="modal fade" id="ModalFabricante" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Novo de Fabricante</h4>
                </div>
                <div class="modal-body">
                
                        <label> Nome: </label>
                        <input class="form-control" height="100px" type="text" name="nome" required/>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                </div>
                </form>
            </div>

        </div>
    </div>



    <!-- Modal LOCAL -->
<form action="../../views/local/inserirlocal.php" method="POST">
    <div class="modal fade" id="ModalLocal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Novo local</h4>
                </div>
                <div class="modal-body">
                
                        <label> Nome: </label>
                        <input class="form-control" height="100px" type="text" name="nome" required/>
                        <label> Sigla: </label>
                        <input class="form-control" height="100px" type="text" name="sigla" required/>
                        <label> Número da sala: </label>
                        <input class="form-control" height="100px" type="number" name="num_sala" required/>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                </div>
                </form>
            </div>

        </div>
    </div>

   <!-- Modal SO -->
<form action="../../views/sistemaoperacional/inserirso.php" method="POST">
    <div class="modal fade" id="ModalSo" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Novo Sistema Operacional</h4>
                </div>
                <div class="modal-body">
                
                        <label> Nome: </label>
                        <input class="form-control" height="100px" type="text" name="nome" required/>
                        <label>Fabricante:</label>
                        <select class="form-control" name=fabricante required>
                            <option disabled selected>Selecione uma opção</option>
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
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                </div>
                </form>
            </div>

        </div>
    </div>




   <!-- Modal Modelo -->
<form action="../../views/modelo/inserirmodelo.php" method="POST">
    <div class="modal fade" id="ModalModelo" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Novo Modelo</h4>
                </div>
                <div class="modal-body">
                
                        <label> Modelo: </label>
                        <input class="form-control" height="100px" type="text" name="modelo" required/>
                        <label>Fabricante:</label>
                        <select class="form-control" name=fabricante required>
                            <option disabled selected>Selecione uma opção</option>
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
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                </div>
                </form>
            </div>

        </div>
    </div>



<!-- Modal Modelo -->
<form action="../../views/usuarios/inserirusuario.php" method="POST">
    <div class="modal fade" id="ModalUsuario" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Novo Usuário</h4>
                </div>
                <div class="modal-body">
                
                        <label> Nome: </label>
                        <input class="form-control" height="100px" type="text" name="nome" required/>

                        <label> Usuário: </label>
                        <input class="form-control" height="100px" type="text" name="usuario" />

                        <label> Senha: </label>
                        <input class="form-control" height="100px" type="password" name="senha" required/>

                        <label>Nivel: (<a title="Nivel 1: , Nivel 2: , Nivel 3: ">?</a>)</label>
                        <select class="form-control" name=fabricante required>
                            <option  selected>Escolha o nivel</option>
                            <option  >Nivel 1</option>
                            <option  >Nivel 2</option>
                            <option  >Nivel 3</option>
                        </select>
                     
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                </div>
                </form>
            </div>

        </div>
    </div>












<nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="../../views/index/index.php" class="navbar-brand"> <span class="glyphicon glyphicon-home"></span> SIS-Patrimoio</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">

<li class="dropdown"><a href="#" class="dropdown-submenu" data-toggle="dropdown">Admin <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#ModalUsuario">Novo Usuário</a></li>
                    <li ><a href="../../views/usuarios/tabelausuario.php">Usuários Cadastrados</a>
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
                    <li ><a href="#" data-toggle="modal" data-target="#ModalFabricante">Fabricante</a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#ModalModelo">Modelo</a></li>
                    <li><a  href="#" data-toggle="modal" data-target="#ModalLocal">Local</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#ModalSo">Sistema Operacional</a></li>
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

