<?php
require_once "./config/BDConnection.php";
class User {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAllUsers() {
        $sql = 'SELECT * FROM "user" ORDER BY id ASC';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addUser(){
        
    }
}
?>
