<?php
class logout_model {
    public function logout() {
        session_start();
        $_SESSION=array();
        session_destroy();
        header("location:" . URLSITE . "/?page=login" );
    }
}
