<?php
require_once '../config/database.php';

class UserModel
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnect();
    }

    public function register($email, $no_telp, $password, $role_id, $alamat, $username)
    {
        $hashed_password = hash("sha256", $password);
        $query = "INSERT INTO staf (email, no_telp, password, role_id, alamat, username) VALUES (:email, :no_telp, :password, :role_id, :alamat, :username)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':no_telp', $no_telp);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':role_id', $role_id);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':username', $username);
        return $stmt->execute();
    }

    public function login($email, $password)
    {
        $query = "SELECT * FROM staf WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':email' => htmlspecialchars($email)]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // echo $user['password'];
        
        if ($user && ($user['password'] == hash('sha256', $password))) {
            return $user;
        }else {
            return false;
        }
    }

    public function isEmailExist($email)
    {
        $query = "SELECT * FROM staf WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}
