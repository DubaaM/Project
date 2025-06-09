<?php
session_start();
// Spustí (alebo obnoví) reláciu – je potrebné na prácu so $_SESSION
session_unset();
// Vymaže všetky premenné uložené v aktuálnej relácii (napr. $_SESSION['admin'])
session_destroy();
// Zničí samotnú reláciu – ukončí platnosť session identifikátora (napr. používateľ už nie je prihlásený)
header('Location: login.php');
// Presmeruje používateľa späť na prihlasovaciu stránku
exit;
?>