<?php
/**
 * Tento súbor vytvára PDO pripojenie k databáze.
 * - Nastaví parametre pripojenia (host, názov databázy, používateľ, heslo).
 * - Vytvorí PDO objekt $pdo, ktorý je globálne dostupný v celom projekte.
 * - Ak pripojenie zlyhá, vypíše chybovú správu a ukončí skript.
 * 
 * Ostatné triedy môžu použiť tento súbor cez require_once a získať prístup k $pdo.
 */
$host = 'localhost';
$dbname = 'project_main'; 
$username = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>