<?php
session_start();
require_once 'classes/user.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username !== '' && $password !== '') {
        $userObj = new User();
        $user = $userObj->login($username, $password);

        if ($user) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            header('Location: index.php');
            exit;

        } else {
            if ($userObj->usernameExists($username)) {
                $error = 'Wrong password!';
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $userObj->register($username, $hash, 'user');
                $user = $userObj->login($username, $password);
                if ($user) {
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];
                    header('Location: index.php');
                    exit;
                } else {
                    $error = 'Cannot register user!';
                }
            }
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php 
        if ($error): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post" action="login.php">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>