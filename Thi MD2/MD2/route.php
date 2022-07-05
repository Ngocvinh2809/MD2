<?php
//Lay gia tri tren url
session_start();
$controller = $_REQUEST['controller'];
$action = $_REQUEST['action'];

//kiem tra dieu kien voi controller
switch ($controller) {
    case 'users':
        include '../MD2/controllers/controller.php';
        $objController = new Controller();
        break;
    default:
        break;
}

//kiem tra dieu kien voi action
switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    default:
        $objController->show();
        break;
}
