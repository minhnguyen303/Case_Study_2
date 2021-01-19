<?php
$status = -1;
if (!empty($loginStatus)) {
    $status = $loginStatus;
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@500&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="bootstrap-5.0.0/css/bootstrap.css">
        <script src="bootstrap-5.0.0/js/bootstrap.js"></script>

        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

        <title>Tài khoản</title>
    </head>
    <body style="font-family: 'Texturina', serif;">
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fs-3" href="index.php"><span class="text-success">M</span><span
                            class="text-secondary">I</span><span class="text-danger">L</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarHeader">
                    <div class="col fs-5">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown ms-3">
                                <a class="nav-link dropdown-toggle" href="#" id="serverList" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    Danh sách máy chủ
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="serverList">
                                    <li><a class="dropdown-item" href="#">Tất cả máy chủ</a></li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li><p class="dropdown-header"><u class="fs-5">Game Play</u></p></li>
                                    <li><a class="dropdown-item" href="#">Survival</a></li>
                                    <li><a class="dropdown-item" href="#">RPG</a></li>
                                    <li><a class="dropdown-item" href="#">SkyBlock</a></li>
                                    <li><p class="dropdown-header fs-5"><u>Mini game</u></p></li>
                                    <li><a class="dropdown-item" href="#">BedWar</a></li>
                                    <li><a class="dropdown-item" href="#">SkyWar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link" href="index.php?page=download">Download</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link" href="index.php?page=tutorial">Hướng dẫn</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link active" href="index.php?page=account">Tài khoản</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="nav-link" href="index.php?page=shop">Cửa hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto fs-5">
                        <div class="dropdown">
                            <a type="button" class="nav-link text-secondary dropdown-toggle" id="mxhDropdown"
                               data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                Mạng xã hội
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="mxhDropdown">
                                <li><a class="dropdown-item text-primary" href="https://www.facebook.com"><i
                                                class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp; Facebook
                                        Page</a></li>
                                <li><a class="dropdown-item text-primary" href="https://www.facebook.com"><i
                                                class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp; Facebook
                                        Group</a></li>
                                <li><a class="dropdown-item text-danger" href="https://www.youtube.com"><i
                                                class="fa fa-youtube" aria-hidden="true"></i>&nbsp; YouTube</a></li>
                                <li><a class="dropdown-item" href="https://www.instagram.com" style="color: #c74ac1"><i
                                                class="fa fa-instagram" aria-hidden="true"></i>&nbsp; Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" role="main" style="padding: 100px 15px 0">

        <div class="row justify-content-md-center">
            <div class="col-4 p-0 rounded">
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-login-tab" data-bs-toggle="pill" href="#pills-login"
                           role="tab" aria-controls="pills-login" aria-selected="true">Đăng nhập</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-register-tab" data-bs-toggle="pill" href="#pills-register"
                           role="tab" aria-controls="pills-register" aria-selected="false">Đăng ký</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active text-center" id="pills-login" role="tabpanel"
                         aria-labelledby="pills-login-tab">
                        <form action="" method="post">
                            <input type="text" name="action" value="login" hidden>
                            <!--<h1 class="h3 mb-3 fw-normal">Please sign in</h1>-->
                            <div class="form-floating mb-3">
                                <input type="text" id="inputUser" name="inputUser"
                                       class="form-control <?php if ($status == 1) {
                                           echo "is-invalid";
                                       } ?>" placeholder="User name" required=""
                                       autofocus="">
                                <label for="inputUser">User name</label>
                                <div class="invalid-feedback">Người dùng không tồn tại!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="inputPassword" name="inputPassword"
                                       class="form-control <?php if ($status == 2) {
                                           echo "is-invalid";
                                       } ?>" placeholder="Password" required="">
                                <label for="inputPassword">Password</label>
                                <div class="invalid-feedback">Mật khẩu sai!</div>
                            </div>
                            <div class="checkbox mb-3 mt-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Đăng nhập</button>
                            <p class="mt-4 mb-3 text-muted">© 2021-2021</p>
                        </form>
                    </div>
                    <div class="tab-pane fade text-center" id="pills-register" role="tabpanel"
                         aria-labelledby="pills-register-tab">
                        <form action="" method="post" class="was-validated">
                            <!--<h1 class="h3 mb-3 fw-normal">Please sign in</h1>-->
                            <input type="text" name="action" value="register" hidden>
                            <div class="form-floating mb-3">
                                <input type="text" id="inputUser" name="inputUser" class="form-control"
                                       placeholder="User name" required autofocus="">
                                <label for="inputUser">User name</label>
                                <div class="invalid-feedback">l</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="inputPassword" name="inputPassword" class="form-control"
                                       placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="inputPassword2" name="inputPassword2" class="form-control"
                                       placeholder="Password Again" required>
                                <label for="inputPassword2">Password Again</label>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="checkbox mb-3 mt-3">
                                <label>
                                    <input type="checkbox" value="remember-me" required> Tôi đã đọc và đồng ý với
                                    <a href="index?page=something">điều khoản người dùng</a>
                                </label>
                                <div class="valid-feedback"></div>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Đăng ký</button>
                            <p class="mt-4 mb-3 text-muted">© 2021-2021</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>

    </footer>
    </body>
    </html>
<?php
