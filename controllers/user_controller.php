<?php
require "models/user_model.php";
require "models/users_model.php";

class user_controller{

    public static function modificarDatosUser($idUser) {
        $_modelo = new user_model();

        $direccion_modify = trim($_POST['txtdireccion']);
        $telefono_modify = trim($_POST['txttelefono']);

        $_modelo->modificarDatosUsuario($idUser, $direccion_modify, $telefono_modify);

        $_modelo_users = new users_model();
        $user = $_modelo_users->verusuario($idUser);
        include 'views/user_view.php';
    }
}
