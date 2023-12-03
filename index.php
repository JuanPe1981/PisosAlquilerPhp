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
    case 'logout' :
        require "controllers/logout_controller.php";
        logout();

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

    case 'vercasas';
        require "controllers/houses_controller.php";
        houses_controller::verhouses();
        break;



    case 'creartema':
        if (isset($_SESSION['login']) == null) {
            require "views/nologeado_view.php";
            break;
        } elseif (isset($_SESSION['login'])) {
            require "views/newTema_view.php";
            break;
        }
    case 'creartemabd':
        require "controllers/tema_controller.php";
        tema_controller::registertema();
        require "views/login_view.php";
        break;
    case 'deletetema';
        $idtema = $_GET['idtema'];
        require "controllers/tema_controller.php";
        tema_controller::deletetema($idtema);
        break;
    case 'modificartitulotema';
        $idtema = $_GET['idtema'];
        require "controllers/tema_controller.php";
        tema_controller::modificartitulo($idtema);
        break;

    case 'vermensajes':
        $idtema = $_GET['idtema'];
        require "controllers/mensajes_controller.php";
        mensajes_controller::vermensajes($idtema);
        break;
    case 'crearmensaje':
        $idtema = $_GET['idtema'];
        require "controllers/mensajes_controller.php";
        mensajes_controller::registermensaje($idtema);
        break;
    case 'deletemensaje';
        $idmensaje = $_GET['idmensaje'];
        $idtema = $_GET['idtema'];
        require "controllers/mensajes_controller.php";
        mensajes_controller::deletemensaje($idmensaje, $idtema);
        break;
    case 'modificarmensaje';
        $idmensaje = $_GET['idmensaje'];
        $idtema = $_GET['idtema'];
        require "controllers/mensajes_controller.php";
        mensajes_controller::modificarmensaje($idmensaje, $idtema);
        break;


    default:
        'login';
        //default : echo "<a href='" . URLSITE ."/?page=menu'>LOGIN</a>";
        break;
}