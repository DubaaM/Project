<?php
require_once 'db.php';
// Načíta súbor 'db.php', ktorý obsahuje napríklad nastavenie databázového pripojenia
// Použitie require_once znamená:
// - ak súbor chýba alebo sa nepodarí načítať, skript sa zastaví (fatálna chyba)
// - súbor sa načíta LEN raz, aby sa predišlo duplicitnému načítaniu a definícii (napr. tried, funkcií)
class User { 
    private $db; 

    public function __construct() {
        global $pdo; 
        $this->db = $pdo; 
    }

    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?"); 
        // Priprav SQL príkaz na výber všetkých údajov z tabuľky users, kde username sa zhoduje s odoslaným menom
        $stmt->execute([$username]); 
        // Spusti pripravený SQL dotaz a nahraď otáznik hodnotou z poľa (tu: používateľským menom)
        $user = $stmt->fetch(PDO::FETCH_ASSOC); 
        // Získaj výsledok ako asociatívne pole (názvy stĺpcov budú kľúče v poli)
        if ($user && password_verify($password, $user['password'])) {
            // Ak bol používateľ nájdený a funkcia password_verify overí, že zadané heslo zodpovedá uloženému (hashovanému) heslu v databáze
            return $user;
        }
        return false; 
        // Ak prihlasovanie zlyhá (nesprávne meno alebo heslo), vráť false
    }
    public function register($username, $passwordHash, $role = 'user') {
        $stmt = $this->db->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        return $stmt->execute([$username, $passwordHash, $role]);
    }

    public function usernameExists($username) {
        $stmt = $this->db->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
    }
}

?>