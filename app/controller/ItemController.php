<?php

require_once '../model/ItemModel.php';

class ItemController
{
    private $itemModel;

    public function __construct()
    {
        $this->itemModel = new ItemModel();
    }

    public function addItem()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $item_name = trim($_POST['item_name']);
            $item_code = trim($_POST['item_code']);
            $stock = trim($_POST['stock']);
            $type_id = trim($_POST['type_id']);
            $location_id = trim($_POST['location_id']);
            $condition_id = trim($_POST['condition_id']);

            if($this->itemModel->check('type', $type_id)){
                $error = 'Tipe tidak ditemukan';
            }elseif($this->itemModel->check('location', $location_id)){
                $error = 'Lokasi tidak ditemukan';
            }else{
                if($this->itemModel->addItem($item_name, $item_code, $stock, $type_id, $location_id, $condition_id)){
                    header('Location: /data-barang');
                }
            }



        }
    }
}
