<?php

$host = 'localhost';
$dbname = 'project_main'; 
$username = 'root'; 
$password = ''; 

try { 
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Vytvorenie nového objektu PDO (PHP Data Object) na spojenie s databázou
    // "charset=utf8" → nastavuje kódovanie znakov na UTF-8 (podpora diakritiky)
    // $username → používateľské meno pre databázu
    // $password → heslo k databáze
    // Výsledkom je uloženie spojenia do premennej $pdo

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // ATTR_ERRMODE → určuje spôsob hlásenia chýb
    // ERRMODE_EXCEPTION → ak sa vyskytne chyba, bude vyhodená výnimka (exception)
    
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
    // Ukonči skript a vypíš chybové hlásenie    
}
?>