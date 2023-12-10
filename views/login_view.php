<?php
include "views/layouts/header.php";
?>
<section class="h-100 gradient-form" style="min-height: 80vh;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0" style="background-color: #eee;">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img class="d-block mx-auto mb-4 mt-5" src="public/img/logo_transparente.png" alt="" width="200" height="180">
                                </div>
                                <form action="<?php echo URLSITE ?>/?page=loginauth" method="post">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control" name="txtusuario" placeholder="USUARIO">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" class="form-control" name="txtpassword" placeholder="PASSWORD">
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="submit" value="LOGIN" class="btn btn-primary btn-block align-items-center" name="btnlogin">
                                    </div>
                                </form>
                                <p class="text-danger"><?php echo (isset($_GET['msg'])) ? $_GET['msg'] : ""?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <img src="public/img/fondo_login_php.jpg" alt="" width="512" height="512"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--                            <div class="container">-->
<!--                                <img class="d-block mx-auto mb-4 mt-5" src="public/img/logo_transparente.png" alt="" width="200" height="180">-->
<!--                                <div class="row justify-content-center">-->
<!--                                    <div class="col-sm-4 mt-5 mb-5">-->
<!---->
<!---->
<!--                                    </div>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<?php
require "views/layouts/footer.php";
?>
