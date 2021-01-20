<?php

namespace Src\Controller;

use Src\Model\UserManager;

class PageController
{

    public function homePage()
    {
        include_once 'src/View/home.php';
    }

    public function userRegisterPage()
    {

    }

    public function userLoginPage()
    {

    }

    public function accountPage()
    {
        $action = "btnLogin";
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'src/View/guest.php';
        }
        else{
            $action = $_POST['action'];
            print_r($action);
            die();
            $userManager = new UserManager();

            if ($action=="login"){
                $userName = $_POST['userName'];
                $password = $_POST['password'];

                $userDB = $userManager->getUser($userName);
                $userDB = (empty($userDB[0]) ? null : $userDB[0]);

                if ($userDB != ""){
                    echo $userDB;
                }
                else{
                    print_r("");
                }
                die();

                if ($userDB != null){
                    if ($userDB['userName'] == $password){
                        $_SESSION['user'] = $userDB;
                        header("Location: index.php?page=account");
                        die();
                    }
                    else{
                        $_SESSION['loginStatus'] = "WrongPassword";
                    }
                }
                else{
                    $_SESSION['loginStatus'] = "UnknownUser";
                }
                $action = "btnLogin";
            }
            elseif ($action=="register"){
                $userName = $_POST['userName'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];

                $userDB = $userManager->getUser($userName);
                $userDB = (empty($userDB[0]) ? null : $userDB[0]);

                if ($userDB == null){
                    if (strlen($password) > 8){
                        if ($password != $password2){
                            $_SESSION['registerStatus'] = "PasswordNotCorrect";
                        }
                    }
                    else{
                        $_SESSION['registerStatus'] = "PasswordTooShort";
                    }
                }
                else{
                    $_SESSION['registerStatus'] = "ExistUser";
                }
                $action = "btnRegister";
            }

            include 'src/View/guest.php';
        }
        /*else{
            $uManager = new UserManager();
            $uName = $_POST['inputUser'];
            $uPass = $_POST['inputPassword'];
            $userAction = 0;

            $checkUser = $uManager->getUser($uName);
            $user = (empty($checkUser[0]) ? null : $checkUser[0]);

            switch ($_POST['action']){
                case "login":
                    $loginStatus = 0;

                    if ((isset($checkUser[0]) ? $checkUser[0]['userName'] : "") == $uName){
                        if ((isset($checkUser[0]) ? $checkUser[0]['password'] : "") != $uPass){
                            $loginStatus = 2;
                        }
                        else{
                            include_once 'src/View/account.php';
                            break;
                        }
                    }
                    else{
                        $loginStatus = 1;
                    }
                    include 'src/View/login.php';
                    break;
                case "register":
                    $uPass2 = $_POST['inputPassword2'];
                    $uBirthDay = $_POST['inputBirthDay'];
                    $registerStatus = 0;

                    if ((isset($checkUser[0]) ? $checkUser[0]['userName'] : "") == $uName){
                        $registerStatus = 1;
                    }
                    elseif (strlen($uPass) < 8){
                        $registerStatus = 2;
                    }
                    elseif ($uPass != $uPass2){
                        $registerStatus = 3;
                    }
                    else{
                        $uManager->addUser();
                        include_once 'src/View/account.php';
                        break;
                    }
                    $userAction = 1;
                    include 'src/View/register.php';
                    break;
            }
        }*/
    }

    public function shopPage()
    {
        include_once 'src/View/shop.php';
    }

    public function adminPage()
    {
        include_once 'src/View/admin-Page.php';
    }

    public function saveData($data)
    {
        $jsonData = json_encode($data);
        file_put_contents("data.json", $jsonData);
    }

    public function loadData()
    {
        $data = file_get_contents("data.json");
        return json_decode($data);
    }
}