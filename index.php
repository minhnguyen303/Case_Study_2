<?php
require_once __DIR__ . '/vendor/autoload.php';

use Src\Controller\PageController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

$controller = new PageController();

switch ($page) {
    case 'register':
        $controller->userRegisterPage();
        break;
    case 'login':
        $controller->userLoginPage();
        break;
    case 'shop':
        $controller->shopPage();
        break;
    case 'account':
        $controller->accountPage();
        break;
    case 'admin':
        $controller->adminPage();
        break;
    default:
        $controller->homePage();
}