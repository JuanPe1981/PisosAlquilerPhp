<?php require "layouts/header.php"?>
<div class="bg-image" style="background-image: url('public/img/bg_php.jpg'); height: max-content">
    <div class="container w-50">
        <h1 class="text-center fw-bold">Usuarios</h1>
        <?php foreach ($users as $user) : ?>
            <div class="card mx-auto mt-3" style="background-color: #eee;">
                <div class="card-header">
                    <p class="card-text"><?php echo $user['idUser']?></p>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $user['userName']?></h5>
                    <p class="card-text"><?php echo $user['nameUser']?> <?php echo $user['firstname']?></p>
                    <a href="<?php echo URLSITE?>/?page=verusuario&idUser=<?php echo $user['idUser']?>" class="btn btn-primary">DETALLE</a>
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
