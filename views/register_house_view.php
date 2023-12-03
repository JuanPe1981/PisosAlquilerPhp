<?php
require "views/layouts/header.php";
?>
<div id="container">
    <h1 class="text-center">Registro de Casa</h1>
    <div class="row justify-content-center">
        <div class = "col-sm-4 mt-5 mb-5 pd-2">
            <form action="<?php echo URLSITE ?>/?page=registerauth_house" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="txtdireccion" placeholder="DIRECCION">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtpostal" placeholder="CODIGO POSTAL">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtciudad" placeholder="CIUDAD">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtlatitud" placeholder="LATITUD">
                </div>
                <div class="form-group mb-5">
                    <input type="text" class="form-control" name="txtlongitud" placeholder="LONGITUD">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="txtpropietario" placeholder="ID DE PROPIETARIO">
                </div>
                <div class="form-group mb-5">
                    <input type="number" class="form-control" name="txtinquilino" placeholder="ID DE INQUILINO">
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
                <input type="submit" value="REGISTRAR" class="btn btn-primary btn-block" name="btnregister">
            </form>
        </div>
    </div>
    <?php
    require "views/layouts/footer.php";
    ?>
