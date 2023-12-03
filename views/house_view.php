<?php
require "views/layouts/header.php";
?>
<div id="container">
    <h1 class="text-center">Detalles de casa</h1>
    <div class="row justify-content-center">
        <div class = "col-sm-4 mt-5 mb-5 pd-2">
            <div class="form-group mb-1" >
                <font size=4 class="fw-bold">Dirección:</font> <font size=3><?php echo $house['addressHouse']?></font>
            </div>
            <div class="form-group mb-1">
                <font size=4 class="fw-bold">Codigo Postal:</font> <font size=3> <?php echo $house['postalCodeHouse']?> </font>
                <font size=4 class="fw-bold">Ciudad: </font> <font size= 3> <?php echo $house['cityHouse']?></font>
            </div>
            <div class="form-group mb-5">
                <font size=4 class="fw-bold">Latitud: </font> <font size=3> <?php echo $house['latitudeHouse']?></font>
                <font size=4 class="fw-bold"> Longitud:</font> <font size=3> <?php echo $house['longitudeHouse']?></font>
            </div>

            <div class="card-body mb-5">
                <h5>Propietario</h5>
                <p class="card-text"><?php echo $house['userProprietary']['nameUser']?> <?php echo $house['userProprietary']['firstname']?></p>
                <a href="<?php echo URLSITE?>/?page=verusuario&idUser=<?php echo $house['userProprietary']['idUser']?>" class="btn btn-primary">DETALLE</a>
            </div>

            <div class="card-body">
                <h5>Inquilino</h5>
                <p class="card-text"><?php echo $house['userRenter']['nameUser']?> <?php echo $house['userRenter']['firstname']?></p>
                <a href="<?php echo URLSITE?>/?page=verusuario&idUser=<?php echo $house['userProprietary']['idUser']?>" class="btn btn-primary">DETALLE</a>
            </div>


        </div>
    </div>
    <?php
    require "views/layouts/footer.php";
    ?>
