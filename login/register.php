<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <li><a href="../index.php" class="login_button">return to home</a></li>
        </ul>
    </nav>
    <div class="registerpage">
        <div class="register_tile">
            <img src="../img/logo.png" alt="Logo" class="logo-image">
            <h1>Create account</h1>

            <?php if (isset($_GET['error']) && $_GET['error'] == 'username_taken'): ?>
                <div class="notification error">Username is already taken.</div>
            <?php elseif (isset($_GET['error']) && $_GET['error'] == 'password_mismatch'): ?>
                <div class="notification error">Passwords do not match.</div>
            <?php endif; ?>

            <form action="register_handler.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <br>
                <input type="submit" value="Register">
            </form>
            <p>Already have an account? <a href="login.php" class="register_link">Login here</a>.</p>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/740dbd682a.js" crossorigin="anonymous"></script>
    <script src="../js/passwordcheck.js"></script>
</body>

</html>