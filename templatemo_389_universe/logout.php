<?php
/**
 * Tento súbor slúži na odhlásenie admina zo systému.
 * - Zruší všetky session premenné a ukončí session.
 * - Presmeruje používateľa na prihlasovaciu stránku (login.php).
 */
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit;
?>