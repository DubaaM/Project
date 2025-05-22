
<?php 
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
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    $stmt = $pdo->prepare("INSERT INTO articles (title, content) VALUES (?, ?)");
    $stmt->execute([$title, $content]);

    header("Location: read_articles.php");
    exit;
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