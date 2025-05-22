<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

require_once 'classes/Contact.php';
$contactObj = new Contact();

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $contactObj->delete($id);
    header('Location: admin.php');
    exit;
}

$contacts = $contactObj->getAll();
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
    <h2>Hello, <?= htmlspecialchars($_SESSION['admin']) ?>!</h2>
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
    <a href="logout.php">Logout</a>
</body>
</html>