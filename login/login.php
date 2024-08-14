<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>

<body>
    <nav>
        <h1 class="logo"><span style="font-weight: bold;">Berry</span>Forum</h1>
        <div class="search-container">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input class="searchbar" type="text" placeholder="Search topics...">
        </div>
        <ul>
            <li><a href="../index.php" class="login_button">r</a></li>
        </ul>
    </nav>
    <div class="loginpage">
        <div class="login_tile">
            <img src="../img/logo.png" alt="Logo" class="logo-image">
            <h1>Login to chat</h1>

            <?php if (isset($_GET['success']) && $_GET['success'] == 'registered'): ?>
                <div class="notification success">Registration successful! Please log in.</div>
            <?php endif; ?>

            <?php if (isset($_GET['error']) && $_GET['error'] == 'incorrect'): ?>
                <div class="notification error">Invalid username or password.</div>
            <?php endif; ?>

            <form action="login_handler.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="register.php" class="register_link">Register here</a>.</p>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/740dbd682a.js" crossorigin="anonymous"></script>
</body>

</html>