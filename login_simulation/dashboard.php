<?php
session_start();

if(!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Welcome, <? $_SESSION ['user'] ?>
</h2>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>