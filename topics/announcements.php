<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<body>
    <nav>
        <h1 class="logo"><a class="home_button" href="../index.php"><span style="font-weight: bold;">Berry</span>Forum</a></h1>
        <div class="search-container">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input class="searchbar" type="text" placeholder="Search topics...">
        </div>
        <ul>
            <?php
            session_start();
            if (isset($_SESSION['user_id'])) {
                echo '<li><a href="login/profile/manage_profile.php" class="login_button">Manage Profile</a></li>';
            } else {
                echo '<li><a href="../login/login.php" class="login_button">Login</a></li>';
            }
            ?>
        </ul>
    </nav>
    <script src="https://kit.fontawesome.com/740dbd682a.js" crossorigin="anonymous"></script>
</body>
</body>

</html>