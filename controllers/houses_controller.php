<?php
require "models/houses_model.php";
class houses_controller{

    public static function vercasas(){
        $_modelo = new houses_model();
        $houses = $_modelo->vercasas();
        include 'views/houses_view.php';
    }

    public static function deletehouse ($idhouse) {
        $_modelo = new houses_model();
        $_modelo->deletehouse($idhouse);
        $houses = $_modelo->vercasas();
        include 'views/houses_view.php';
    }

    public static function vercasa($idHouse){
        $_modelo = new houses_model();
        $house = $_modelo->vercasa($idHouse);
        include 'views/house_view.php';
    }

}
