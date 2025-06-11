
<?php 
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}
require_once 'classes/db.php';
include 'partials/header.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Skontroluje, či bola požiadavka odoslaná metódou POST (t. j. formulár bol odoslaný)
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $stmt = $pdo->prepare("INSERT INTO articles (title, content) VALUES (?, ?)");
    // Pripraví SQL dotaz na vloženie článku do tabuľky 'articles'
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