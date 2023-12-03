<!DOCTYPE html>
<html lang = "es" >
<head >
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">AdsHouse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <?php
                    if (isset($_SESSION['login']) == null) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo URLSITE ?>?page=login">Home</a>
                        </li>
                        <?php
                    } elseif (isset($_SESSION['login'])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo URLSITE ?>?page=menu">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo URLSITE ?>?page=ver_usuarios">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo URLSITE ?>?page=ver_casas">Casas</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <ul class="navbar-nav me-right my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <?php
                    if (isset($_SESSION['login']) == null){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active">Funcion sin usuario</a>
                        </li>
                        <?php
                    } elseif (isset($_SESSION['login'])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active"><?php echo $_SESSION['_usuario']['userName']?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <ul class="navbar-nav me-right my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <?php
                    if (isset($_SESSION['login']) == null){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLSITE ?>/?page=login">Log in</a>
                        </li>
                        <?php
                    } elseif (isset($_SESSION['login'])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLSITE ?>/?page=logout">Log out</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</head >
<body >
