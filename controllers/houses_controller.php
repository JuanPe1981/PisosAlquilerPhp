<?php
require "models/houses_model.php";
class houses_controller{

//    public static function registerhouse(){
//        $_modelo = new tema_model();
//        $_idusuario = trim($_SESSION['idusuario']);
//        $_titulo = trim($_POST['txttitulo']);
//        $_descripcion = trim($_POST['txtdescripcion']);
//
//        $_modelo->registertema($_idusuario,$_titulo,$_descripcion);
//    }

    public static function vercasas(){
        $_modelo = new houses_model();
        $houses = $_modelo->vercasas();
        include 'views/houses_view.php';
    }

//    public static function titulotema($idtema){
//        $_modelo = new tema_model();
//        $titulo = $_modelo->vertitulotema($idtema);
//        include 'views/mensajes_view.php';
//    }
//
//    public static function deletetema ($idtema) {
//        $_modelo = new tema_model();
//        $_modelo->deletetema($idtema);
//        $temas = $_modelo->vertemas();
//        include 'views/temas_view.php';
//    }
//
//    public static function modificartitulo ($idtema) {
//        $_modelo = new  tema_model();
//
//        $titulomodificado = trim($_POST['txttitulomodificado']);
//
//        $_modelo->modificartitulotema($idtema,$titulomodificado);
//
//        $temas = $_modelo->vertemas();
//        include 'views/temas_view.php';
//    }

}
