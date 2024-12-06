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
        try {
            $stmt = $this->conn->prepare("SELECT id, username, password FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                return true;
            }
            return false;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function closeConnection() {
        $this->conn = null;
    }
}
?>
