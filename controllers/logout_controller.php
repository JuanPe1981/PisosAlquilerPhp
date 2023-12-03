<?php
function logout(){
    require 'models/logout_model.php';
    $logout = new logout_model();
    $logout->logout();
}
