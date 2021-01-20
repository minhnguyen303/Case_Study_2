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
        session_start();
        $action = "btnLogin";
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'src/View/guest.php';
        }
        else{
            $action = $_POST['action'];
            $userManager = new UserManager();

            if ($action=="login"){
                $userName = $_POST['userName'];
                $password = $_POST['password'];
                $remember = (empty($_POST['remember']) ? "false" : $_POST['remember']);

                $userDB = $userManager->getUser($userName);
                $userDB = (empty($userDB[0]) ? null : $userDB[0]);
                if (!empty($userDB)){
                    if ($userDB['password'] == $password){
                        if ($remember == "true"){
                            $_SESSION['user'] = $userDB;
                        }
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
                    if (strlen($password) >= 8){
                        if ($password != $password2){
                            $_SESSION['registerStatus'] = "PasswordNotCorrect";
                        }
                        else{
                            echo "Đang đăng ký .........................................................................";
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