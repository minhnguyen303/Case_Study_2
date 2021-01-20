<?php
$user = null;
if (!empty($_SESSION['user'])){
    $user = $_SESSION['user'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include "src/View/Layout/boostrap.php"?>

    <title>Tài khoản</title>
</head>
<body style="font-family: 'Texturina', serif;">
<?php include "src/View/Layout/header.php"?>
<div class="container" role="main" style="padding: 90px 15px 0">
    <div class="row">
        <h2>Information</h2>
        <ul class="list-group">
            <li class="list-group-item">
                <h5>User name</h5>
                <span class="text-primary"><?php echo $user['userName'];?></span>
            </li>
            <li class="list-group-item">
                <h5>Password</h5>
                <span class="text-light"><?php echo $user['password'];?></span>
            </li>
            <li class="list-group-item">
                <h5>Birthday</h5>
                <span class="text-primary"><?php echo $user['birthday'];?></span>
            </li>
            <li class="list-group-item">
                <h5>Phone</h5>
                <span class="text-primary">0<?php echo $user['phone'];?></span>
            </li>
            <li class="list-group-item">
                <h5>Email</h5>
                <span class="text-primary"><?php echo $user['email'];?></span>
            </li>
            <li class="list-group-item">
                <h5>Money</h5>
                <span class="text-danger"><?php echo $user['money'];?> $</span>
            </li>
        </ul>
    </div>
    <div class="row">
        <h2>Inventory</h2>
        <div class="row">

        </div>
    </div>
</div>
<footer>

</footer>
</body>
</html>
<?php
