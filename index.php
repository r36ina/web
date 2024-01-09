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
                        <a href="#!" class="header__login" id="signInLink">Sign In</a>
                        <button class="header__but">Sign Up</button>
                    </ul>
                </nav>
                <div id ="container">
                    <div id="objects">
                    <?php 
                        $choice = $_GET["C"];
                        switch ($choice){
                            case "1": echo(file_get_contents("structure.php")); break;
                            case "2": echo(file_get_contents("features.php")); break;
                            case "3": echo(file_get_contents("plan.php")); break;
                            case "4": echo(file_get_contents("network.php")); break;
                            case "5": echo(file_get_contents("reviews.php")); break; }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <fieldset class="container" id="signInContainer">
        <form class="login" action="send.php" method="post">
            <legend class="login-title">Sign In</legend>
            <input type="text" name="name" id="name" pattern="[A-Za-zA-Яа-яЁё\s]+" placeholder="Enter Name" title="Name must contain only letters" required>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" value="Sign In">
        </form>
    </fieldset>
    <script src="./js/script.js"></script>
</body>

 