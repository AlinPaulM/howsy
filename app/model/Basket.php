<?php
namespace App\model;
use App\helper\Database;

class Basket extends Database {
    public function get($userId) {
        $sql = "SELECT `products`.* 
                FROM `basket`
                INNER JOIN `products` 
                ON `basket`.`productId` = `products`.`id` AND `basket`.`userId` = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $basket = $result->fetch_all(MYSQLI_ASSOC);

        return $basket;
    }

    public function remove($userId, $productId) {
        $sql = "DELETE FROM `basket`
                WHERE `basket`.`userId` = ? AND `basket`.`productId` = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ss", $userId, $productId);
        $stmt->execute();
        $stmt->close();
    }
}