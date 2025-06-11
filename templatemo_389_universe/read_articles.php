<?php 
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}
require_once 'classes/db.php';
include_once 'partials/header.php';
/**
 * Tento súbor slúži na zobrazenie a správu všetkých článkov.
 * - Načíta všetky články z databázy a zobrazí ich v zozname.
 * - Každý článok je možné upraviť alebo vymazať pomocou odkazov.
 * - Stránka obsahuje hlavičku, zoznam článkov, odkazy na editáciu a vymazanie, a pätičku.
 */
$stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="templatemo_main_content">

    <div id="templatemo_content">
        <h1>Manage Articles</h1>
        <a href="create_article.php">Create New Article</a>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <h2><?php echo htmlspecialchars($article['title']); ?></h2>
                    <p><?php echo htmlspecialchars($article['content']); ?></p>
                    <a href="update_article.php?id=<?php echo $article['id']; ?>">Edit</a>
                    <a href="delete_article.php?id=<?php echo $article['id']; ?>">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div> <!-- END of templatemo_content -->

    <div class="clear"></div>

<?php include 'partials/footer.php'; ?>