<?php
require_once 'classes/db.php';

class Contact {
    private $db;

    public function __construct() {
        global $pdo;
        $this->db = $pdo;
    }

    public function create($fullname, $email, $phone, $subject, $message) {
        try {
            $stmt = $this->db->prepare("INSERT INTO contacts (fullname, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
            return $stmt->execute([$fullname, $email, $phone, $subject, $message]);
        } catch (PDOException $e) {
            throw new Exception("error: " . $e->getMessage());
        }
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM contacts ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM contacts WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>