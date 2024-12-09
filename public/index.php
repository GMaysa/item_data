<?php
require_once '../app/controller/UserController.php';

session_start();

$userController = new UserController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/dashboard':
        if (isset($_SESSION['user'])) {
            require '../app/view/HomeView.php';
        } else {
            header('Location: /login');
            exit;
        }
        break;

    case '/data-barang':
        if (isset($_SESSION['user'])) {
            require '../app/view/ItemView.php'; 
        } else {
            header('Location: /login');
            exit;
        }
        break;

    case '/work-order':
        if (isset($_SESSION['user'])) {
            require '../app/view/WorkView.php'; 
        } else {
            header('Location: /login');
            exit;
        }
        break;

    case '/jadwal':
        if (isset($_SESSION['user'])) {
            require '../app/view/ScheduleView.php';
        } else {
            header('Location: /login');
            exit;
        }
        break;

    case '/logout':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userController->logout();
        }
        break;

    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userController->login();
        } else {
            require '../app/view/LoginView.php';
        }
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
