<?php
session_start();
require_once 'classes/user.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $userObj = new User();
    $user = $userObj->login($username, $password);

    if ($user) {
        $_SESSION['admin'] = $user['username'];
        header('Location: admin.php');
        exit;
    } else {
        $error = 'Hibás felhasználónév vagy jelszó!';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <h2>Admin</h2>
    <?php if ($error): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post" action="login.php">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Bejelentkezés</button>
    </form>
</body>
</html>