<?php
require "views/layouts/header.php";
?>
<div id="container">
    <h1 class="text-center mt-3">Detalles de casa</h1>
    <div class="row justify-content-center">
        <div class = "col-sm-4 mt-1 mb-1 pd-2">
            <form action="<?php echo URLSITE ?>/?page=modificarPropietarioInquilino&idHouse=<?php echo $house['idHouse']?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="txtdireccion" readonly="readonly" placeholder="<?php echo $house['addressHouse']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtpostal" readonly="readonly" placeholder="<?php echo $house['postalCodeHouse']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtciudad" readonly="readonly" placeholder="<?php echo $house['cityHouse']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtlatitud" readonly="readonly" placeholder="<?php echo $house['latitudeHouse']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtlongitud" readonly="readonly" placeholder="<?php echo $house['latitudeHouse']?>">
                </div>
                <div class="form-group mb-3">
                    <h5>Agencia</h5>
                    <input type="text" class="form-control" name="txtagencia" readonly="readonly" value="<?php echo $house['userAgency']['idUser']?>">
                </div>
                <div class="form-group mb-3">
                    <h5>Propietario</h5>
                    <p class="card-text"><?php echo $house['userProprietary']['nameUser']?> <?php echo $house['userProprietary']['firstname']?></p>
                    <input type="number" class="form-control" name="txtpropietario" value="<?php echo $house['userProprietary']['idUser']?>">
                    <a href="<?php echo URLSITE?>/?page=verusuario&idUser=<?php echo $house['userProprietary']['idUser']?>" class="btn btn-primary">DETALLE</a>
                </div>
                <div class="form-group mb-3">
                    <h5>Inquilino</h5>
                    <p class="card-text"><?php echo $house['userRenter']['nameUser']?> <?php echo $house['userRenter']['firstname']?></p>
                    <input type="number" class="form-control" name="txtinquilino" value="<?php echo $house['userRenter']['idUser']?>">
                    <a href="<?php echo URLSITE?>/?page=verusuario&idUser=<?php echo $house['userRenter']['idUser']?>" class="btn btn-primary">DETALLE</a>
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
                <input type="submit" value="MODIFICAR" class="btn btn-primary btn-warning" name="btnmodificar">
            </form>

        </div>
    </div>
    <?php
    require "views/layouts/footer.php";
    ?>
