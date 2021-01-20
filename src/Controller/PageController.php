<?php

namespace Src\Controller;

use Src\Model\User;
use Src\Model\UserManager;

class PageController
{
    public function homePage()
    {
        include_once 'src/View/home.php';
    }

    public function accountPage()
    {
        session_start();

        // Default is login page
        $action = "btnLogin";

        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'src/View/guest.php';
        }
        else{
            $action = $_POST['action'];
            $userManager = new UserManager();

            // Khi login
            if ($action=="login"){
                
                $userName = $_POST['userName'];
                $password = $_POST['password'];
                
                // Ghi nhớ đăng nhập nếu trình duyệt chưa tắt
                $remember = (empty($_POST['remember']) ? "false" : $_POST['remember']);

                // Lấy dữ liệu từ database
                $userDB = $userManager->getUser($userName);
                $userDB = (empty($userDB[0]) ? null : $userDB[0]);

                if (!empty($userDB)){ // Người dùng tồn tại
                    if ($userDB['password'] == $password){
                        if ($remember == "true"){
                            $_SESSION['user'] = $userDB;
                        }
                    }
                    else{ // Mật khẩu sai
                        $_SESSION['loginStatus'] = "WrongPassword";
                    }
                }
                else{ // Người dùng không tồn tại
                    $_SESSION['loginStatus'] = "UnknownUser";
                }
                // Quay lại trang user để xử lý tiếp
                $action = "btnLogin";
            }
            elseif ($action=="register"){ // Khi đăng ký
                $userName = $_POST['userName'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
                $birthday = $_POST['birthday'];

                $userDB = $userManager->getUser($userName);
                $userDB = (empty($userDB[0]) ? null : $userDB[0]);

                if ($userDB == null){
                    if (strlen($password) >= 8){
                        if ($password != $password2){
                            $_SESSION['registerStatus'] = "PasswordNotCorrect";
                        }
                        else{
                            $userManager->addUser(new User($userName, $password,$birthday));
                            $_SESSION['user'] = ["userName"=>"$userName", "password"=>"$password", "birthday"=>"$birthday", "phone"=>"", "email"=>"none@gmai.com","money"=>"0"];
                            $action = "btnLogin";
                            include 'src/View/guest.php';
                            die();
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
            elseif ($action=="logout"){ // Khi logout
                unset($_SESSION['user']);
            }

            include 'src/View/guest.php';
        }
    }

    public function shopPage()
    {
        include_once 'src/View/shop.php';
    }
}