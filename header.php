<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaslesVPN</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <fieldset class="container" id="signInContainer">
        <form class="login" action="send.php" method="post">
            <legend class="login-title">Sign In</legend>
            <input type="text" name="name" id="name" pattern="[A-Za-zA-Яа-яЁё\s]+" placeholder="Enter Name" title="Name must contain only letters" required>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" value="Sign In">
        </form>
    </fieldset>
    <header class="header">
        <div class="wrapper">
            <div class="header__wrapper">
                <img src="./img/Logo.png" alt="LaslesVPN" class="header__logo">
                <span class="logo__text">Lasles<span class="logo__text-two">VPN</span></span>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="index.php?C=1" class="header__link">About</a>
                        </li>
                        <li class="header__item">
                            <a href="index.php?C=2" class="header__link">Features</a>
                        </li>
                        <li class="header__item">
                            <a href="index.php?C=3" class="header__link">Pricing</a>
                        </li>
                        <li class="header__item">
                            <a href="index.php?C=4" class="header__link">Network</a>
                        </li>
                        <li class="header__item">
                            <a href="index.php?C=5" class="header__link">Help</a>
                        </li>
                    </ul>
                </nav>
                <a href="#!" class="header__login" id="signInLink">Sign In</a>
                <button class="header__but">Sign Up</button>
            </div>
        </div>
    </header>
    <script src="./js/script.js"></script>