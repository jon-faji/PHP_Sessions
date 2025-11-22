<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'admin' && $password === 'password123') {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
} else {
    echo "Login failed! Invalid username or password.";
}