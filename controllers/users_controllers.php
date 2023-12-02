<?php
ob_start();

function inicio (){
    include 'views/index_view.php';
}

function login() {
    include ('./views/index_view.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        if ($user_name == '' || $password == '') {
            $error = 'Debes incluir nombre de usuario y contraseña';
        } else {
            require ('./models/user_model.php');
            $user = verifyUser($user_name, $password);
            header('Location: ../index_menu.php');
        }
    }
}
