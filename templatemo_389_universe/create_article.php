
<?php 
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}
include 'classes/db.php';
include 'partials/header.php'; 
/**
 * Tento súbor slúži na vytváranie nových článkov.
 * - Po odoslaní formulára sa načítajú a ošetria údaje (názov, obsah).
 * - Článok sa uloží do databázy do tabuľky articles pomocou PDO.
 * - Po úspešnom vytvorení článku je používateľ presmerovaný na stránku so zoznamom článkov.
 * - Stránka obsahuje hlavičku, formulár na zadanie článku a pätičku.
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Skontroluje, či bola požiadavka odoslaná metódou POST (t. j. formulár bol odoslaný)

    $title = htmlspecialchars($_POST['title']);
    // Získa hodnotu poľa 'title' z formulára a prevedie špeciálne znaky na HTML entity
    // Ochrana proti XSS útokom (napr. <script> bude zobrazené ako text)

    $content = htmlspecialchars($_POST['content']);
    // To isté pre obsah článku ('content') – ošetrenie vstupu pre bezpečnosť

    $stmt = $pdo->prepare("INSERT INTO articles (title, content) VALUES (?, ?)");
    // Pripraví SQL dotaz na vloženie článku do tabuľky 'articles'
    // Použitie "?" znamená, že hodnoty budú bezpečne vložené ako parametre (prepared statement = ochrana pred SQL injection)

    $stmt->execute([$title, $content]);
    // Spustí SQL dotaz s hodnotami z formulára ($title a $content)

    header("Location: read_articles.php");
    // Po úspešnom vložení článku presmeruje používateľa na stránku 'read_articles.php'

    exit;
    // Ukončí ďalšie spracovanie skriptu (zabezpečuje správne presmerovanie)
}

?>


<div id="templatemo_main_content">
    

    <div id="templatemo_content">
        <h1>Create Article</h1>
        <form method="POST">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>
            
            <button type="submit">Create</button>
        </form>
    </div> 

    <div class="clear"></div>
</div> 

<?php include 'partials/footer.php'; ?>