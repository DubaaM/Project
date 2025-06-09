<?php

session_start(); // Spustenie
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}
require_once 'classes/Contact.php'; // Načítanie súboru 'Contact.php' (iba raz), ktorý obsahuje definíciu triedy Contact

$contactObj = new Contact(); // Vytvorenie novej inštancie (objektu) triedy Contact a uloženie do premennej $contactObj

if (isset($_GET['delete'])) { // Ak je nastavený parameter 'delete' v URL (napr. admin.php?delete=3)
    $id = (int)$_GET['delete']; // Získaj hodnotu parametra 'delete', prevedenú na celé číslo a ulož do premennej $id
    $contactObj->delete($id); // Zavolaj metódu delete objektu contactObj, ktorá vymaže záznam s daným ID
    header('Location: admin.php');
    exit;
}
$contacts = $contactObj->getAll(); // Zavolaj metódu getAll objektu contactObj, ktorá získa všetky kontakty a uloží ich do premennej $contacts
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 6px; }
    </style>
</head>
<body>
    <h2>Hello, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
    <h3>Messages</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
            <th>Operations</th>
        </tr>
        <?php foreach ($contacts as $c): ?>
        <tr>
            <td><?= htmlspecialchars($c['fullname']) ?></td>
            <td><?= htmlspecialchars($c['email']) ?></td>
            <td><?= htmlspecialchars($c['phone']) ?></td>
            <td><?= htmlspecialchars($c['subject']) ?></td>
            <td><?= nl2br(htmlspecialchars($c['message'])) ?></td>
            <td><?= htmlspecialchars($c['created_at']) ?></td>
            <td>
                <a href="admin.php?delete=<?= $c['id'] ?>" onclick="return confirm('Sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="read_articles.php" >Articles</a>
    <a href="logout.php">Logout</a>
</body>
</html>