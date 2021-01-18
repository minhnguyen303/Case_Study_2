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
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'src/View/account.php';
        }
        else{
            $uManager = new UserManager();
            if ($_POST['action'] == "login"){
                $uName = $_POST['inputUser'];
                $checkUser = $uManager->getUser($uName);
                if ((isset($checkUser[0]) ? $checkUser[0]['userName'] : "") == $uName){
                    $userID = $checkUser[0]['id'];
                    include 'src/View/account.php';
                }
            }
        }
    }

    public function shopPage()
    {
        include_once 'src/View/shop.php';
    }

    public function adminPage()
    {
        include_once 'src/View/admin-Page.php';
    }

    public function  saveData($data)
    {
        $jsonData = json_encode($data);
        file_put_contents("data.json", $jsonData);
    }

    public function  loadData()
    {
        $data = file_get_contents("data.json");
        return json_decode($data);
    }
}