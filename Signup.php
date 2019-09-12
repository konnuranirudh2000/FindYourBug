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
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/signup.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="head">
        <h2>Sign Up</h2>
        <?php
            if(isset($_GET['error'])){
                if($_GET['error']==="exists"){
                    echo "<p id='exits'>The user with the same username or email already exits!</p>";
                } else if($_GET['error']==="empty"){
                    echo "<p id='empty'>Please fill up all the fields including the attacker/defender option</p>";
                }
            }
        ?>
    </div>
    <div class="form">
        <form method="POST" action="./forms/Signup.php">
        <label id="fName">First Name: </label><br>
        <input type="text" id="fName" placeholder="First Name" name="fName"><br><br>
        <label id="lName">Last Name: </label><br>
        <input type="text" id="lName" placeholder="Last Name" name="lName"><br><br>
        <label id="username">Username: </label><br>
        <input type="text" id="username" placeholder="Username" name="username"><br><br>
        <label id="email">Email: </label><br>
        <input type="text" id="email" name="email" placeholder="Email"><br><br>
        <label id="password">Password: </label><br>
        <input type="password" id="password" name="password" placeholder="Password">
        <br><br>
        <input type="radio" id="attacker" name="type" value="a">
        <label for="attacker" id="attacker">Attacker</label>
        <input type="radio" id="defender" name="type" value="d">
        <label for="defender" id="defender">Defender</label><br><br>
        <button id="submit" type="submit">SignUp</button>
    </div>
</body>
</html>