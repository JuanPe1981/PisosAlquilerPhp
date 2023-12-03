<?php
require "models/house_model.php";
require "models/houses_model.php";

class house_controller{

    public static function modificarPropietarioInquilino($idHouse) {
        $_modelo = new house_model();

        $user_agency_modify = trim($_POST['txtagencia']);
        $user_proprietary_modify = trim($_POST['txtpropietario']);
        $user_renter_modify = trim($_POST['txtinquilino']);

        $_modelo->modificarPropietarioInquilino($idHouse, $user_agency_modify, $user_proprietary_modify, $user_renter_modify);

        $_modelo_houses = new houses_model();
        $house = $_modelo_houses->vercasa($idHouse);
        include 'views/house_view.php';
    }
}
