<?php include("../../sessao/validarSessao.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/base.css">
    <script src="../../js/ativaItemMenu.js"></script>
    <title>ISSET - CYBER SYSTEN</title>
    <link rel="shortcut icon" type="imagem/x-icon" href="../../img/logo.png">
</head>

<body onload="ativaItemMenu()">
    <!-- Menu superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../../img/logo.png" alt="logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php

                    if ($_SESSION['caixa-visualizar']) { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/isset/views/caixa/listar.php"
                                id="caixa">CAIXA</a>
                        </li>
                    <?php } ?>

                    <?php

                    if ($_SESSION['estoque-visualizar']) { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/isset/views/produto/listar.php">ESTOQUE</a>
                        </li>
                    <?php } ?>

                    <?php

                    if ($_SESSION['estoque-visualizar']) { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/isset/views/fornecedor/listar.php">FORNECEDOR</a>
                        </li>
                    <?php } ?>
                    <?php

                    if ($_SESSION['cliente-visualizar']) { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/isset/views/cliente/listar.php">CLIENTE</a>
                        </li>
                    <?php } ?>

                    <?php

                    if ($_SESSION['usuario-visualizar']) { ?>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/isset/views/usuario/listar.php">USUÁRIO</a>
                        </li>

                    <?php } ?>

                    <?php
                    if ($_SESSION['eh-master']) { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/isset/views/empresa/listar.php">EMPRESA</a>
                        </li>
                    <?php } ?>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="btn-sair" data-bs-toggle='modal' data-bs-target='#modalSair'>SAIR</a>
                    </li>

                </ul>

                <div class="row">
                    <h5>
                        <?php echo "Bem vindo " ?><b>
                            <?php echo $_SESSION['login']; ?>
                        </b>
                    </h5>
                </div>

            </div>
        </div>
    </nav>

    <!-- Modal -->

    <div class="modal fade" id="modalSair" tabindex="-1" aria-labelledby="modalSair" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSair">Atenção!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <b>
                        <?php echo $_SESSION['login']; ?>
                    </b> Tem certeza que deseja sair da sessão?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <a href="../../index.php" class="btn btn-danger">Sair</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Modal -->
    <!-- /Menu superior-->