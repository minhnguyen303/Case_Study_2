<?php

namespace Src\Controller;

class PageController
{

    public function homePage()
    {
        include_once 'src/View/home-Page.php';
    }

    public function userRegisterPage()
    {

    }

    public function userLoginPage()
    {

    }

    public function accountPage()
    {
        include_once 'src/View/account.php';
    }

    public function shopPage()
    {
        include_once 'src/View/shop.php';
    }

    public function adminPage()
    {
        include_once 'src/View/admin-Page.php';
    }
}