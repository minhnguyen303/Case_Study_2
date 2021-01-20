<?php
require_once __DIR__ . '/vendor/autoload.php';

use Src\Controller\PageController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

$controller = new PageController();

switch ($page) {
    case 'shop':
        $controller->shopPage();
        break;
    case 'account':
        $controller->accountPage();
        break;
    default:
        $controller->homePage();
}