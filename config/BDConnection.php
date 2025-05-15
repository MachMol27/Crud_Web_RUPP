<?php
// namespace config\DBConnection;
class Database {
    private $host = 'localhost';
    private $port = '5432';
    private $db   = 'student_management';
    private $user = 'postgres';
    private $pass = 'Net2409';

    public function getConnection() {
        try {
            $pdo = new PDO("pgsql:host={$this->host};port={$this->port};dbname={$this->db}", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "✅ Connected to PostgreSQL successfully!"; 
            return $pdo;
        } catch (PDOException $e) {
            echo "❌ Connection failed: " . $e->getMessage();
            return null;
        }
    }
}


?>
