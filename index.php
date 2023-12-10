<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require "config.php";
$page = "login";
if (isset($_GET['page']))
    $page = $_GET['page'];
switch ($page){
    case 'menu':
        require "views/index_view.php";
        break;
    case 'login':
        require "controllers/login_controller.php";
        login_controller::index();
        break;
    case 'loginauth':
        require "controllers/login_controller.php";
        login_controller::login();
        break;
    case 'logout':
        require "controllers/logout_controller.php";
        logout();
        break;

    case 'register_user' :
        require "views/register_user_view.php";
        break;
    case 'registerauth_user' :
        require "controllers/register_user_controller.php";
        register_user_controler::validacion();
        break;

    case 'register_house' :
        require "views/register_house_view.php";
        break;
    case 'registerauth_house' :
        require "controllers/register_house_controller.php";
        register_house_controler::validacion();
        break;

    case 'ver_casas';
        require "controllers/houses_controller.php";
        houses_controller::vercasas();
        break;
    case 'deletecasa';
        $idHouse = $_GET['idHouse'];
        require "controllers/houses_controller.php";
        houses_controller::deletehouse($idHouse);
        break;
    case 'vercasa':
        $idHouse = $_GET['idHouse'];
        require "controllers/houses_controller.php";
        houses_controller::vercasa($idHouse);
        break;

    case 'ver_usuarios';
        require "controllers/users_controller.php";
        users_controller::verusuarios();
        break;
    case 'verusuario':
        $idUsuario = $_GET['idUser'];
        require "controllers/users_controller.php";
        users_controller::verusuario($idUsuario);
        break;

    case 'modificarPropietarioInquilino';
        $idHouse = $_GET['idHouse'];
        require "controllers/house_controller.php";
        house_controller::modificarPropietarioInquilino($idHouse);
        break;

    case 'modificarDatosUsuario';
        $idUser = $_GET['idUser'];
        require "controllers/user_controller.php";
        user_controller::modificarDatosUser($idUser);
        break;

    default:
        'login';
        //default : echo "<a href='" . URLSITE ."/?page=login'>LOGIN</a>";
        break;
}