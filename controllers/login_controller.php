<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require "models/login_model.php";

class login_controller {
    public static function index()
    {
        if (isset($_SESSION['login']))
            header('location:' . URLSITE);
        require "views/login_view.php";
    }

    public static function login () {
        $_modelo = new login_model();
        $_usuario = trim($_POST['txtusuario']);
        $_password = trim($_POST['txtpassword']);

        $_resultado = $_modelo->login($_usuario, $_password);
        $_admin = $_resultado['admin'];

        if($_resultado && $_admin == true){
            $_SESSION['login'] = true;
            $_SESSION['usuario'] = $_usuario;

            $_SESSION['_usuario'] = $_resultado;
            header('location:'.URLSITE. "/?page=menu");

            var_dump($_resultado);

        }else{
            $errorLogin = "Usuario o contraseña incorrectos o no tiene permisos para acceder";
            header('location:'.URLSITE . "/?page=login&msg=" . $errorLogin);
        }
    }


}
