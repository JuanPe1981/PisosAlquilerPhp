<?php require "layouts/header.php"?>
<main>
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="public/img/logo_transparente.png" alt="" width="200" height="180">
        <h1 class="display-5 fw-bold text-body-emphasis">Pisos de alquiler</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Puedes crear pisos y usuarios desde este panel.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3" onclick="location.href='<?php echo URLSITE ?>?page=register_user'">Añadir Usuarios</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="location.href='<?php echo URLSITE ?>?page=creartema'">Añadir Casas</button>
            </div>
        </div>
    </div>
</main>

<?php require "layouts/footer.php"?>
