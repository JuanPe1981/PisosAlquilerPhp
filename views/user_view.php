<?php
require "views/layouts/header.php";
?>
    <div class="bg-image w-100" style="background-image: url('public/img/bg_php.jpg');width: 100%; min-height: 80vh;">
        <div id="container w-50">
            <div class="row justify-content-center" style="--bs-gutter-x: 0rem;" >
                <div class = "col-sm-4 mt-5 mb-5 pd-2" style="background-color: #eee;">
                    <h1 class="text-center mt-5">Datos de usuario</h1>
                    <form action="<?php echo URLSITE ?>/?page=modificarDatosUsuario&idUser=<?php echo $user['idUser']?>" method="POST">
                        <div class="form-group pb-1 pt-1 ps-5 pe-5">
                            <input type="text" class="form-control" name="txtusuario" readonly="readonly" value="<?php echo $user['userName']?>">
                        </div>
                        <div class="form-group pb-1 pt-1 ps-5 pe-5">
                            <input type="text" class="form-control" name="txtnombre" readonly="readonly" value="<?php echo $user['nameUser']?>">
                        </div>
                        <div class="form-group pb-1 pt-1 ps-5 pe-5">
                            <input type="text" class="form-control" name="txtapellido" readonly="readonly" value="<?php echo $user['firstname']?>">
                        </div>
                        <div class="form-group pb-1 pt-1 ps-5 pe-5">
                            <input type="text" class="form-control" name="txtdireccion" value="<?php echo $user['addressUser']?>">
                        </div>
                        <div class="form-group pb-1 pt-1 ps-5 pe-5 mb-5">
                            <input type="text" class="form-control" name="txttelefono" value="<?php echo $user['phoneNumber']?>">
                        </div>
                        <?php
                        if (isset($_GET['errores'])) {
                            $errores = unserialize(trim($_GET['errores']));
                            ?>
                            <ul class="errores">
                                <?php
                                foreach ($errores as $error){
                                    echo '<li style="color:red">' . $error . '</li>';
                                }
                                ?>
                            </ul>
                            <?php
                        }
                        ?>
                        <?php
                        if (isset($_GET['registrado'])) {
                            $registrado = trim($_GET['registrado'])
                            ?>
                            <ul class="registrado">
                                <?php
                                echo '<li style="color:lawngreen">' . $registrado . '</li>';
                                ?>
                            </ul>
                            <?php
                        }
                        ?>
                        <div class="row justify-content-center ms-5 me-5">
                            <input type="submit" value="MODIFICAR" class="btn btn-primary btn-warning mb-2" name="btnmodify">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
require "views/layouts/footer.php";
?>