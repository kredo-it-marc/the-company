<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <h1> HOMEWORK: style the login form using bootstrap</h1>
    <?php
        if( isset($_SESSION["success"]) && isset($_SESSION["message"]))
        {
            // (condition) ? TRUE : FALSE ;
            $class = ($_SESSION["success"]==1) ? "success" : "danger";
            $message = $_SESSION["message"];
            unset($_SESSION["success"]);
            unset($_SESSION["message"]);
    ?>
        <div class="alert alert-<?php echo $class;?>">
            <?php echo $message; ?>
        </div>
    <?php
        }
    ?>
    <form action="../actions/login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required placeholder="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" name="btn_submit" value="Login">
    </form>
    <a href="register.php">Register Here</a>
</body>
</html>