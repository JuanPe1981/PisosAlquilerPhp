<?php

class houses_model {


//    public function registertema($idusuario, $titulo, $descripcion){
//        $this->_db->conectar();
//        $r = $this->_db->conexion->prepare("INSERT INTO TEMAS(IDUSUARIO,TITULO,DESCRIPCION) VALUES ('".$idusuario."','".$titulo."','".$descripcion."')");
//        $r->execute();
//        $this->_db->desconectar();
//        if ($r->fetch(PDO::FETCH_OBJ))
//            return true;
//        else
//            return false;
//    }

    public function vercasas() {

    $urlLogin = BASE_URL.'house';
    $ch = curl_init($urlLogin);
    curl_setopt($ch, CURLOPT_URL, $urlLogin);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    $houses = json_decode($result, true);

    return $houses;
    }

//    public function vertitulotema($idtema){
//        $this->_db->conectar();
//        $r = $this->_db->conexion->query("SELECT TITULO FROM TEMAS WHERE IDTEMA ='$idtema'");
//        $this->_db->desconectar();
//        $titulo = $r->fetch();
//        return $titulo[0];
//    }
//
//    public function deletetema ($idtema) {
//        $this->_db->conectar();
//        $r = $this->_db->conexion->prepare("DELETE FROM TEMAS WHERE IDTEMA = '$idtema'");
//        $r->execute();
//        if ($r->fetch(PDO::FETCH_OBJ))
//            return true;
//        else
//            return false;
//    }
//
//    public function modificartitulotema ($idtema, $titulomodificado) {
//        $this->_db->conectar();
//        $r = $this->_db->conexion->prepare("UPDATE TEMAS SET TITULO = '$titulomodificado' WHERE IDTEMA = '$idtema'");
//        $r->execute();
//        if ($r->fetch(PDO::FETCH_OBJ))
//            return true;
//        else
//            return false;
//    }
}
