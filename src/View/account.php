<?php
$user = null;
if (!empty($_SESSION['user'])){
    $user = $_SESSION['user'];
}
?>
<div class="container" role="main" style="padding: 90px 15px 0">
    <div class="row">
        <div class="pt-2 pb-3 d-flex justify-content-between">
            <h2 class="">Information</h2>
            <button type="button" class="btn btn-outline-danger pb-2" onclick="btnLogout()">Logout</button>
        </div>
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
    <form action="" method="post" hidden>
        <input type="text" name="action" value="logout">
        <button type="submit" id="btnLogout"></button>
        <script>
            function btnLogout() {
                document.getElementById("btnLogout").click();
            }
        </script>
    </form>
</div>