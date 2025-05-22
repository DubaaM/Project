<?php
/**
 * Trieda User slúži na správu používateľov (admin).
 * - V konštruktore inicializuje databázové pripojenie (PDO).
 * - Metóda login() overí používateľské meno a heslo (hash).
 * - Pri úspešnom prihlásení vráti údaje používateľa, inak false.
 * Všetky databázové operácie sú vykonávané bezpečne pomocou pripravených dotazov.
 */
require_once 'db.php';

class User
{
    private $db;

    public function __construct()
    {
        global $pdo;
        $this->db = $pdo;
    }

    public function login($username, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}