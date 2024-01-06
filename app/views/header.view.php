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
                <ul>
                    <a href="">
                        <li>Logo</li>
                    </a>
                    <li>
                        <div class="search_box" id="search_box">
                            <input type="text" placeholder="search..." />
                            <button class="search_btn">
                                <ion-icon name="search-circle"></ion-icon>
                            </button>
                        </div>
                    </li>
                    <li>
                        <button class="login_btn" onclick="window.location.href='Signin'">Login</button>
                        <button class="sign_up" onclick="window.location.href='Signup'">SignUp</button>
                    </li>
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
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
                        </a>
                        <a href="">
                            <li>topics</li>
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
    <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>
</body>

</html>