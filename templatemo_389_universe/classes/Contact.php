<?php
/**
 * Trieda Contact je zodpovedná za spracovanie údajov z kontaktného formulára.
 * - V konštruktore inicializuje databázové pripojenie (PDO).
 * - Metóda create() uloží novú správu do databázy (meno, email, telefón, predmet, správa).
 * - Metóda getAll() načíta všetky kontaktné správy od najnovšej po najstaršiu.
 * - Metóda delete() vymaže konkrétnu správu z databázy podľa ID.
 * Všetky databázové operácie sú vykonávané bezpečne pomocou pripravených dotazov.
 */
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
