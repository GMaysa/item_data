<?php
class Database
{
    private $host = 'localhost';
    private $db_name = 'item_data';
    private $username = 'root';
    private $password = 'myzptr23';
    private $connection;

    public function getConnect()
    {
        $this->connection = null;

        try {
            $this->connection = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connection successful";
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->connection;
    }
}
