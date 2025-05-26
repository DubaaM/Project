<?php
session_start();
require_once 'classes/user.php';
/**
 * Tento súbor slúži na prihlásenie admina do systému.
 * - Po odoslaní formulára sa načítajú prihlasovacie údaje (meno, heslo).
 * - Overí sa meno a heslo pomocou triedy User (hash).
 * - Pri úspešnom prihlásení sa nastaví session a admin je presmerovaný na admin rozhranie.
 * - Pri neúspešnom prihlásení sa zobrazí chybová správa.
 * - Stránka obsahuje prihlasovací formulár a spätnú väzbu pre používateľa.
 */
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
        <button type="submit">Login</button>
    </form>
</body>
</html>