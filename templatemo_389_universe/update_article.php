<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}
require_once 'classes/db.php';
include_once 'partials/header.php';
/**
 * Tento súbor slúži na úpravu existujúceho článku.
 * - Načíta článok z databázy podľa ID z GET parametra.
 * - Po odoslaní formulára sa aktualizujú údaje článku v databáze.
 * - Po úspešnej úprave je používateľ presmerovaný na stránku so zoznamom článkov.
 * - Stránka obsahuje hlavičku, formulár na úpravu článku a pätičku.
 */

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
$stmt->execute([$id]);
$article = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    $stmt = $pdo->prepare("UPDATE articles SET title = ?, content = ? WHERE id = ?");
    $stmt->execute([$title, $content, $id]);

    header("Location: read_articles.php");
    exit;
}
?>
<div id="templatemo_main_content">
    
        <div id="templatemo_content">
            <h1>Edit Article</h1>
            <form method="POST">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" required>
                
                <label for="content">Content:</label>
                <textarea id="content" name="content" required><?php echo htmlspecialchars($article['content']); ?></textarea>
                
                <button type="submit">Update</button>
            </form>
        </div> <!-- END of templatemo_content -->
    
        <div class="clear"></div>

<?php include 'partials/footer.php'; ?>