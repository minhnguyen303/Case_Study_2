<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Server MIL</title>
</head>
<body style="font-family: 'Texturina', serif;">
<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="index.php"><span class="text-success">M</span><span class="text-secondary">I</span><span class="text-danger">L</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHeader">
                <div class="col fs-5">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle" href="#" id="serverList" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh sách máy chủ
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="serverList">
                                <li><a class="dropdown-item" href="#">Tất cả máy chủ</a></li>
                                <li><div class="dropdown-divider"></div></li>
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
                            <a class="nav-link" href="index.php?page=account">Tài khoản</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="index.php?page=shop">Cửa hàng</a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto fs-5">
                    <div class="dropdown">
                        <a type="button" class="nav-link text-secondary dropdown-toggle" id="mxhDropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Mạng xã hội
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="mxhDropdown">
                            <li><a class="dropdown-item text-primary" href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp; Facebook Page</a></li>
                            <li><a class="dropdown-item text-primary" href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp; Facebook Group</a></li>
                            <li><a class="dropdown-item text-danger" href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i>&nbsp; YouTube</a></li>
                            <li><a class="dropdown-item text-secondary" href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i>&nbsp; Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container" role="main" style="padding: 80px 15px 0">
    <h1>Chỉnh lại giao diện như hệ điều hành PC với các theme là các hệ điều hành khác nhau!</h1>
</div>
</body>
</html>
<?php
