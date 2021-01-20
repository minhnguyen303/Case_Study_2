<?php
$registerStatus = null;
if (!empty($_SESSION['registerStatus'])) {
    $registerStatus = $_SESSION['registerStatus'];
}
?>
<div class="container" role="main" style="padding: 90px 15px 0">

<div class="row justify-content-md-center">
    <div class="col-4 p-0 rounded">
        <div class="col-12 btn-group btn-group-lg mb-4" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-primary btn-block" onclick="btnLogin()">Login</button>
            <button type="button" class="btn btn-success btn-block">Register</button>
        </div>
        <form action="" method="post">
            <input type="text" name="action" value="register" hidden>
            <div class="form-floating mb-3">
                <input type="text" id="userName" name="userName"
                       class="form-control <?php if ($registerStatus == "ExistUser") {
                           echo "is-invalid";
                       } ?>"
                       placeholder="User name" required autofocus="">
                <label for="userName" class="text-secondary">User name</label>
                <div class="invalid-feedback">Tên người dùng đã tồn tại</div>
            </div>
            <div class="form-floating mb-3">
                <input type="password" id="password" name="password"
                       class="form-control <?php if ($registerStatus == "PasswordTooShort") {
                           echo "is-invalid";
                       } ?>"
                       placeholder="Password" required>
                <label for="password" class="text-secondary">Password</label>
                <div class="invalid-feedback">Mật khẩu quá ngắn!</div>
            </div>
            <div class="form-floating mb-3">
                <input type="password" id="password2" name="password2"
                       class="form-control <?php if ($registerStatus == "PasswordNotCorrect") {
                           echo "is-invalid";
                       } ?>" placeholder="Password Again" required>
                <label for="password2" class="text-secondary">Password Again</label>
                <div class="invalid-feedback">Mật khẩu nhập lại bị sai!</div>
            </div>
            <div class="form-floating mb-3">
                <input type="date" id="birthday" name="birthday"
                       class="text-secondary form-control <?php if ($registerStatus == 3) {
                           echo "is-invalid";
                       } ?>" placeholder="<?php echo date("Y-m-d"); ?>" required>
                <label for="birthday">Ngày sinh</label>
                <div class="invalid-feedback">Ngày sinh không hợp lệ!</div>
            </div>
            <div class="checkbox mb-3 mt-3 form-check form-switch">
                <label class="text-start">
                    <input type="checkbox" value="remember-me" class="form-check-input" required>
                    <label class="text-start ms-2">Tôi đã đọc và đồng ý với <a href="index?page=something">điều
                            khoản người dùng</a></label>
                </label>
                <div class="valid-feedback"></div>
            </div>
            <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Đăng ký</button>
            <p class="mt-4 mb-3 text-muted text-center">© 2021-2021</p>
        </form>

    </div>
    <form action="" method="post" hidden>
        <input type="text" name="action" id="action" value="bntLogin" hidden>
        <button type="submit" id="btnLogin"></button>
        <script>
            function btnLogin() {
                document.getElementById("btnLogin").click();
            }
        </script>
    </form>
</div>
<?php
unset($_SESSION['registerStatus']);