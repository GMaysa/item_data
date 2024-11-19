<?php
require_once '../app/controller/UserController.php';

session_start();

$userController = new UserController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/public/dashboard') {
    if (isset($_SESSION['user'])) {
        require '../app/view/HomeView.php';
    } else {
        header('Location: /public/login');
        exit;
    }
} elseif ($uri == '/public/logout' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $userController->logout();
    exit;
} else {
    if ($uri == '/public/register' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $userController->register();
    } elseif ($uri == '/public/login' && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $userController->login();
    } elseif ($uri == '/public/register') {
        require '../app/view/RegisterView.php';
    } elseif ($uri == '/public/login') {
        if (isset($_SESSION['user'])){
            header('Location: /public/dashboard'); 
            require '../app/view/HomeView.php';
        }else{
            require '../app/view/LoginView.php';
        }
    } elseif (isset($_GET['logout'])) {
        $userController->logout();
    } else {
        echo "Requested URI: " . htmlspecialchars($_SERVER['REQUEST_URI']) . "<br>";
    }
}
