<?php
require "models/users_model.php";
class users_controller{

    public static function verusuarios(){
        $_modelo = new users_model();
        $users = $_modelo->verusuarios();
        include 'views/users_view.php';
    }


    public static function verusuario($idUser){
        $_modelo = new users_model();
        $user = $_modelo->verusuario($idUser);
        include 'views/user_view.php';
    }

}
