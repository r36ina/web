<fieldset class="container" id="signInContainer">
        <form class="login" action="send.php" method="post">
            <legend class="login-title">Sign In</legend>
            <input type="text" name="name" id="name" pattern="[A-Za-zA-Яа-яЁё\s]+" placeholder="Enter Name" title="Name must contain only letters" required>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" value="Sign In">
        </form>
    </fieldset>