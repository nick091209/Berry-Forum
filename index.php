<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>BerryForum</title>
</head>

<body>
    <nav>
        <h1 class="logo"><a class="home_button" href="#"><span style="font-weight: bold;">Berry</span>Forum</a></h1>
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
                echo '<li><a href="login/login.php" class="login_button">Login</a></li>';
            }
            ?>
        </ul>
    </nav>
    <div class="homepage">
        <div class="front_text">
            <h1>Welcome to the BerryForum!</h1>
        </div>

        <div class="front_buttons">
            <div class="total_posts">
                <img src="img/post_icon.png" alt="Icon" class="post_icon">
                <h1>203.042</h1>
                <p>Total Posts</p>
            </div>
            <div class="total_likes">
                <img src="img/likes_icon.png" alt="Icon" class="likes_icon">
                <h1>203.042</h1>
                <p>Total Likes</p>
            </div>
            <div class="online_users">
                <img src="img/online_icon.png" alt="Icon" class="online_icon">
                <h1>69</h1>
                <p>Online Users</p>
            </div>
        </div>
        <div class="topics_top">
            <div class="topic_text">
                <h1>Topics</h1>
            </div>
            <div class="topic_right_text_top">
                <h1>Total Posts</h1>
            </div>
        </div>

        <a href="topics/announcements.php" class="topic_link">
            <div class="topic">
                <div class="topic_icon">
                    <img src="img/announcement_icon.png" alt="Announcement Icon">
                </div>
                <div class="topic_text">
                    <h1>Announcements</h1>
                    <p>All the latest news and updates</p>
                </div>
                <div class="topic_right_text">
                    <p>10.000</p>
                </div>
            </div>
        </a>

        <a href="https://www.google.com" target="_blank" class="topic_link">
            <div class="topic">
                <div class="topic_icon">
                    <img src="img/programming_icon.png" alt="Programming Icon">
                </div>
                <div class="topic_text">
                    <h1>Programming</h1>
                    <p>Leave a message in the programming section</p>
                </div>
                <div class="topic_right_text">
                    <p>10.000</p>
                </div>
            </div>
        </a>

        <a href="https://www.google.com" target="_blank" class="topic_link">
            <div class="topic_bottom">
                <div class="topic_icon">
                    <img src="img/music_icon.png" alt="Music Icon">
                </div>
                <div class="topic_text">
                    <h1>Music</h1>
                    <p>Leave a message in the music section</p>
                </div>
                <div class="topic_right_text">
                    <p>10.000</p>
                </div>
            </div>
        </a>

        <script src="https://kit.fontawesome.com/740dbd682a.js" crossorigin="anonymous"></script>
</body>

</html>