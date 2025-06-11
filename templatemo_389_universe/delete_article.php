<?php 
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}
require_once 'classes/db.php';
/**
 * Tento súbor slúži na vymazanie článku podľa ID.
 * - Získa ID článku z GET parametra.
 * - Vymaže článok z databázy pomocou PDO.
 * - Po vymazaní presmeruje používateľa na stránku so zoznamom článkov.
 */
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM articles WHERE id = ?");
$stmt->execute([$id]);

header("Location: read_articles.php");
exit;
?>