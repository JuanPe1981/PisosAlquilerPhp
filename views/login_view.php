<?php
require "views/layouts/header.php";
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4 mt-5 mb-5">
            <form action="<?php echo URLSITE ?>/?page=loginauth" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="txtusuario" placeholder="USUARIO">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="txtpassword" placeholder="PASSWORD">
                </div>
                <input type="submit" value="LOGIN" class="btn btn-primary btn-block" name="btnlogin">
            </form>
            <p class="text-danger"><?php echo (isset($_GET['msg'])) ? $_GET['msg'] : ""?></p>
        </div>
    </div>
</div>
<?php
require "views/layouts/footer.php";
?>
