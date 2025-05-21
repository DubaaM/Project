<?php include 'classes/db.php'; ?>

<?php
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM articles WHERE id = ?");
$stmt->execute([$id]);

header("Location: read_articles.php");
exit;
?>