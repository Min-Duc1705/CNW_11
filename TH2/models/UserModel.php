<?php
require_once __DIR__ . '/../Config/Database.php';
session_start();

class UserModel {
    private $conn;
    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }
    public function login($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($password === $row['password']) { 
                return $row;
            }
        }
        return false;
    }
}
?>
