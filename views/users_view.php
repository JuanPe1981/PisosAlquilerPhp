<?php require "layouts/header.php"?>
<h1 class="text-center">Temas de foro</h1>
<?php foreach ($users as $user) : ?>
<div class="card">
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
    <?php endforeach; ?>
</div>
<?php require "layouts/footer.php"?>
