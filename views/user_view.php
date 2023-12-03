<?php
require "views/layouts/header.php";
?>
<div id="container">
    <h1 class="text-center mt-5">Datos de usuario</h1>
    <div class="row justify-content-center">
        <div class = "col-sm-4 mt-5 mb-5 pd-2">
            <form action="<?php echo URLSITE ?>/?page=registerauth_user" method="POST">
                <div class="form-group mb-1">
                    <input type="text" class="form-control" name="txtusuario" readonly="readonly" placeholder="<?php echo $user['userName']?>">
                </div>
                <div class="form-group mb-1">
                    <input type="text" class="form-control" name="txtnombre" readonly="readonly" placeholder="<?php echo $user['nameUser']?>">
                </div>
                <div class="form-group mb-1">
                    <input type="text" class="form-control" name="txtapellido" readonly="readonly" placeholder="<?php echo $user['firstname']?>">
                </div>
                <div class="form-group mb-1">
                    <input type="text" class="form-control" name="txtdireccion" placeholder="<?php echo $user['addressUser']?>">
                </div>
                <div class="form-group mb-5">
                    <input type="text" class="form-control" name="txttelefono" placeholder="<?php echo $user['phoneNumber']?>">
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
                <input type="submit" value="MODIFICAR" class="btn btn-primary btn-warning" name="btnmodify">
            </form>
        </div>
    </div>
    <?php
    require "views/layouts/footer.php";
    ?>
