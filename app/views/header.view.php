<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quipz.com</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/header.css">
</head>

<body>
    <header>
        <nav>
            <div class="nav-logo">
                <ul class="nav-logo-ul">
                    <a href="home">
                        <li class="logo-img">
                            <div class="log-icon"><ion-icon name="megaphone-outline"></ion-icon></div> Quipz.com
                        </li>
                    </a>
                    <li>
                        <div class="search_box" id="search_box">
                            <input type="text" placeholder="search..." />
                            <button class="search_btn">
                                <ion-icon name="search-circle"></ion-icon>
                            </button>
                        </div>
                    </li>
                    <?php if (!isset($_SESSION['username'])) { ?>
                        <li>
                            <button class="login_btn" onclick="window.location.href='Signin'">Login</button>
                            <button class="sign_up" onclick="window.location.href='Signup'">SignUp</button>
                        </li>
                    <?php } else { ?>
                        <li>
                            <nav class="profile_drop_down">
                                <ul class="drop-down closed">
                                    <li><a class="nav-button">
                                            <img class="profileimage" src="<?= ROOT ?>/assets/images/<?= $_SESSION['profileimage'] ?>" alt="">
                                            <p><?php echo $_SESSION["username"]?></p>
                                        </a></li>
                                    <li class="profile_li_nav"><a href="profile?id=<?=$_SESSION['user_id']?>">PROFILE</a></li>
                                    <li><a href="signin"><button class="log_out" name="logout" type="submit">Log Out</button></a></li>
                                </ul>
                            </nav>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="nav-link" id="nav_link">
                <div class="hand_Burger" id="hand_Burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="nav-container" id="nav-container">
                    <ul class="nav_link_element">
                        <a href="allblogs">
                            <li>All blogs</li>
                        </a>
                        <a href="">
                            <li>Featured</li>
                        </a>
                        <a href="">
                            <li>Top news</li>
                        </a>
                        <a href="">
                            <li>Business</li>
                        </a>
                        <a href="">
                            <li>Food</li>
                        </a>
                        <a href="">
                            <li>Lifestyle</li>
                        </a>
                        <a href="">
                            <li>Technology</li>
                        </a>
                        <a href="">
                            <li>Economy</li>
                        </a>
                        <a href="">
                            <li>International</li>
                        </a>
                        <a href="">
                            <li>National</li>
                        </a>
                        <a href="">
                            <li>Current</li>
                        </a>
                    </ul>
                    <div class="social_media">
                        <ul class="social_media_icon">
                            <a href="">
                                <li>
                                    <ion-icon class="social_icons" name="mail"></ion-icon>
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <ion-icon class="social_icons" name="logo-facebook"></ion-icon>
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <ion-icon class="social_icons" name="logo-instagram"></ion-icon>
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <ion-icon class="social_icons" name="logo-twitter"></ion-icon>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script src="<?= ROOT ?>/assets/js/header.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>