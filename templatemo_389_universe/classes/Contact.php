<?php

require_once 'classes/db.php'; // Načítanie súboru 'db.php', ktorý obsahuje pripojenie k databáze (zabezpečí dostupnosť premennej $pdo)

class Contact {
    private $db;
    public function __construct() {
        global $pdo; // Použitie globálnej premennej $pdo (obsahuje spojenie s databázou z db.php)
        $this->db = $pdo; // Priradenie globálneho objektu $pdo do atribútu $db tejto triedy
    }

    public function create($fullname, $email, $phone, $subject, $message) { 
        try { 
            $stmt = $this->db->prepare("INSERT INTO contacts (fullname, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
            // Priprav SQL príkaz na vloženie údajov do tabuľky contacts
            return $stmt->execute([$fullname, $email, $phone, $subject, $message]); 
            // Spusti pripravený SQL prikaz
        } catch (PDOException $e) { 
            throw new Exception("error: " . $e->getMessage());
        }
    }

    public function getAll() { 
        $stmt = $this->db->query("SELECT * FROM contacts ORDER BY created_at DESC"); 
        // Spusti SQL dotaz, ktorý vyberie všetky stĺpce z tabuľky contacts
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
        // Vráť všetky výsledky ako pole asociatívnych polí (každý kontakt je jedno pole s názvami stĺpcov ako kľúčmi)
    }

    public function delete($id) { 
        $stmt = $this->db->prepare("DELETE FROM contacts WHERE id = ?"); 
        // Priprav SQL príkaz na vymazanie záznamu
        return $stmt->execute([$id]); 
        // Spusti príkaz
    }
}

?>
