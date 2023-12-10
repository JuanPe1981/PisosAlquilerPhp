<?php require "layouts/header.php"?>
    <div class="bg-image w-100" style="background-image: url('public/img/bg_php.jpg');width: 100%; min-height: 80vh;">
        <div id="container w-50">
            <img class="d-block mx-auto mb-4" src="public/img/logo_transparente.png" alt="" width="200" height="180">
            <div class="row justify-content-center pt-5" style="--bs-gutter-x: 0rem;" >
                <div class="col-lg-6 mx-auto">
                    <h1 class="display-5 fw-bold text-body-emphasis text-center text-opacity-100">Pisos de alquiler</h1>
                    <p class="lead mb-4 text-center fw-bold text-opacity-100">Puedes crear pisos y usuarios desde este panel.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3 fw-bold" onclick="location.href='<?php echo URLSITE ?>?page=register_user'">Añadir Usuarios</button>
                        <button type="button" class="btn btn-outline-success btn-lg px-4 fw-bold" onclick="location.href='<?php echo URLSITE ?>?page=register_house'">Añadir Casas</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php require "layouts/footer.php"?>
