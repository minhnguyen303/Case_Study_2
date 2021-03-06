<?php
$loginStatus = null;
if (!empty($_SESSION['loginStatus'])) {
    $loginStatus = $_SESSION['loginStatus'];
}
?>
<div class="container" role="main" style="padding: 90px 15px 0">
    <div class="row justify-content-md-center">
        <div class="col-4 p-0 rounded">
            <div class="col-12 btn-group btn-group-lg mb-4" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-primary btn-block">Login</button>
                <button type="button" class="btn btn-outline-success btn-block" onclick="btnRegister()">Register</button>
            </div>
            <form action="" method="post">

                <input type="text" name="action" value="login" hidden>

                <div class="form-floating mb-3">
                    <input type="text" id="userName" name="userName" class="form-control <?php if ($loginStatus == "UnknownUser") {echo "is-invalid";} ?>"
                           placeholder="User name" required autofocus="">
                    <label for="userName" class="text-secondary">User name</label>
                    <div class="invalid-feedback">Người dùng không tồn tại!</div>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" id="password" name="password" class="form-control <?php if ($loginStatus == "WrongPassword") {echo "is-invalid";} ?>"
                           placeholder="Password" required>
                    <label for="password" class="text-secondary">Password</label>
                    <div class="invalid-feedback">Mật khẩu sai!</div>
                </div>

                <div class="checkbox mb-3 mt-3 form-check form-switch text-start">
                    <input type="checkbox" value="true" class="form-check-input" name="remember" id="remember">
                    <label class="text-start ms-2" for="remember">Tự động đăng nhập</label>
                    <div class="valid-feedback"></div>
                </div>
                <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Đăng nhập</button>
                <p class="mt-4 mb-3 text-muted text-center">© 2021-2021</p>
            </form>
        </div>
    </div>
    <form action="" method="post" hidden>
        <input type="text" name="action" id="action" value="btnRegister" hidden>
        <button type="submit" id="btnRegister"></button>
        <script>
            function btnRegister() {
                document.getElementById("btnRegister").click();
            }
        </script>
    </form>
</div>
<?php
unset($_SESSION['loginStatus']);