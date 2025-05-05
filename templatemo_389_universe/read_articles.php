<?php include 'db.php'; ?>
<?php include 'partials/header.php'; ?>

<?php
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