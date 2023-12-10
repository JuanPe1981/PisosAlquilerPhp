<?php require "layouts/header.php"?>
<div class="bg-image pb-2" style="background-image: url('public/img/bg_php.jpg'); min-height: 80vh;">
    <div class="container w-50">
        <h1 class="text-center">Casas</h1>
            <?php foreach ($houses as $house) : ?>
            <div class="card mx-auto mt-3" style="background-color: #eee;">
                <div class="card-header">
                    <p class="card-text"><?php echo $house['idHouse']?></p>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $house['addressHouse']?></h5>
                    <p class="card-text"><?php echo $house['postalCodeHouse']?> <?php echo $house['cityHouse']?></p>
                    <a href="<?php echo URLSITE?>/?page=vercasa&idHouse=<?php echo $house['idHouse']?>" class="btn btn-primary">DETALLE</a>
                    <a href="<?php echo URLSITE?>/?page=deletecasa&idHouse=<?php echo $house['idHouse']?>" class="btn btn-danger">ELIMINAR</a>
                    <p></p>
                    <div class = "col-sm-10 mt-0">
                        <p class="text-danger"><?php echo (isset($_GET['msg'])) ? $_GET['msg'] : ""?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require "layouts/footer.php"?>
