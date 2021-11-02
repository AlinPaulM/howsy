<?php
namespace App\model;
use App\helper\Database;

class Product extends Database {
    public function getAvailableProducts($userId) {
        $sql = "SELECT `products`.* 
                FROM `products` 
                LEFT JOIN `basket`
                ON `products`.`id` = `basket`.`productId` AND `basket`.`userId` = ?
                WHERE `basket`.`productId` IS NULL";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $products = $result->fetch_all(MYSQLI_ASSOC);

        return $products;
    }

    public function add($userId, $productId) {
        $sql = "INSERT INTO `basket`(`userId`, `productId`) 
                VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ss", $userId, $productId);
        $stmt->execute();
        $stmt->close();
    }
}