<?php

require_once './config/database.php';

class ItemModel{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnect();
    }

    public function check($name, $value)
    {
        $query = "SELECT * FROM `$name` WHERE id = :value LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function addItem($item_name, $item_code, $stock, $type_id, $location_id, $condition_id)
    {
        $query = "INSERT INTO item (item_name, item_code, stock, type_id, location_id, condition_id) VALUES (:item_name, :item_code, :stock, :type_id, :location_id, :condition_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':item_code',$item_name);
        $stmt->bindParam(':item_code',$item_code);
        $stmt->bindParam(':stock',$stock);
        $stmt->bindParam(':type_id',$type_id);
        $stmt->bindParam(':location_id',$location_id);
        $stmt->bindParam(':condition_id',$condition_id);
        return $stmt->execute();
    }
}