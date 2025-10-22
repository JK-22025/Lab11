<?php
//Open a new session
session_start();

// Simple authentication (in real app, use secure authentication)
$valid_username = "JK_23";
$valid_password = "PieceofCake@1994";

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $_POST['username'];
    header('Location: canada-info.php');
    exit();
} else {
    $_SESSION['login-error'] = "Invalid credentials! Try again!";
    //echo "Invalid credentials! <a href='index.php'>Try again</a>";
    header('Location: index.php');
    exit();
}
