<?php
require '../db/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        header("Location: register.php?error=password_mismatch");
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $query->store_result();

    if ($query->num_rows > 0) {
        header("Location: register.php?error=username_taken");
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            header("Location: login.php?success=registered");
        } else {
            echo "Error: " . $stmt->error;
        }
    }
    $query->close();
    $stmt->close();
}
