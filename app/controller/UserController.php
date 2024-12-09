<?php
require_once '../app/model/UserModel.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $no_telp = trim($_POST['no_telp']);
            $password = trim($_POST['password']);
            $confirm_password = trim($_POST['confirm_password']);
            $role_id = isset($_POST['role_id']) ? trim($_POST['role_id']) : null;
            $alamat = trim($_POST['alamat']);

            if (empty($username) || empty($password) || empty($no_telp) || empty($email) || empty($role_id) || empty($alamat) || empty($confirm_password)) {
                $error = "All fields are required!";
                require '../app/view/RegisterView.php';
            } elseif ($password !== $confirm_password) {
                $error = "Password doesn't match!";
                require '../app/view/RegisterView.php';
            } elseif ($this->userModel->isEmailExist($email)) {
                $error = "Email already registered!";
                require '../app/view/RegisterView.php';
            }else{
                if ($this->userModel->register($email, $no_telp, $password, $role_id, $alamat, $username)) {
                    // echo "Registration Successful!";
                    header('Location: /dashboard');
                } else {
                    echo "Registration Failed!";
                }
            }

        }
    }

    public function isLogin() 
    {
        return isset($_SESSION['user']);
    }

    public function login()
    {
        echo 'i';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');

            // Login dengan memanggil model User
            $user = $this->userModel->login($email, $password);
            
            if ($user) {
                echo 'dude';
                // Mulai sesi jika belum dimulai
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                // Set sesi untuk user yang login
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'username' => $user['username']
                ];

                // echo 'user loggedin';
                header('Location: /dashboard');
                exit;
            } else {
                // Jika login gagal, tampilkan pesan error
                $error =  'Email atau Password salah';
                require '../app/view/LoginView.php';
            }
        } else {
            // Jika metode bukan POST, tampilkan halaman login
            require '../app/view/LoginView.php';
        }
    }


    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /login');
    }
}
