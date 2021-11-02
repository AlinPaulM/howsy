<?php
namespace App\model;
use App\helper\Database;

class User extends Database {
    public function get($username, $password) {
        $sql = "SELECT `id`, `name`, `contract_name`, `contract_length_months` 
                FROM `users` 
                WHERE `username` = ? and `password` = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        return $user;
    }
}