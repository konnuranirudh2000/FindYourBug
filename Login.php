<?php
session_start();
// Check if the user is already logged in
if(isset($_SESSION['username'])){
    // redirect to home if logged in
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LogIn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/login.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="head">
        <h1>Log In</h1>
        <?php
        if(isset($_GET['login'])){
            if($_GET['login']==="error"){
                echo "<p id='error'>Log In failed, please try again</p>";
            }
        }
        ?>
    </div>
    <div class = "form">
        <form method="POST" action="./forms/Login.php">
            <label id="username">Username/Email: </label><br>
            <input type="text" placeholder="Username or Email" name="username" id="username"><br><br>
            <label id="password">Password: </label><br>
            <input type="password" placeholder="Password" name="password" id="password"><br><br>
            <button type="submit" id="submit">Log In</button>
        </form>
    </div>
</body>
</html>