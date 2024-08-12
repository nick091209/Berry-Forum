<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login/login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Profile</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>

<body>
    <nav>
        <h1 class="logo"><span style="font-weight: bold;">Berry</span>Forum</h1>
        <div class="search-container">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input class="searchbar" type="text" placeholder="Search topics...">
        </div>
        <ul>
            <li><a href="../../index.php" class="login_button">return to home</a></li>
        </ul>
    </nav>
    <div class="profile_page">
        <a href="../logout.php" class="logout_button">Logout</a>
        <div class="profile-page">
            <h1>Manage Your Profile</h1>
        </div>
    </div>
</body>

</html>