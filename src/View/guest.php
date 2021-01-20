
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include "src/View/Layout/boostrap.php"?>

    <title>Guest</title>
</head>
<body style="font-family: 'Texturina', serif;">
<?php include "src/View/Layout/header.php";?>
<?php
    if (!empty($_SESSION['user'])) {
        if ($_SESSION['user']['userName'] == "root"){

            include "src/View/admin.php";
        }
        else{
            include "src/View/account.php";
        }
    }
    else{
        if (!empty($action)){
            switch ($action){
                case "btnLogin":
                    include "src/View/login.php";
                    break;
                case "btnRegister":
                    include "src/View/register.php";
                    break;
                default:
                    include "src/View/login.php";
            }
        }
    }
?>
</body>
</html>