<?php
require '../db/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();

    if ($user_id && password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;

        header("Location: ../index.php");
    } else {
        header("Location: login.php?error=incorrect");
    }
    $stmt->close();
}
