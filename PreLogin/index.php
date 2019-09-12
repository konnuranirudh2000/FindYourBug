<?php
// Check if the user is already logged in
if(isset($_SESSION['username'])){
    // redirect to home if logged in
    header("Location: ../index.php");
    exit();
}
$root="http://localhost:8080/FYB";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FYB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $root;?>/PreLogin/style/preindex.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class = "head">
        <h1>Find Your Bug (FYB)</h1>
        <a href = "<?php echo $root;?>/Login.php" class="login">Log In</a>
        <a href = "<?php echo $root;?>/Signup.php" class="signup">Sign Up</a>
    </div>
    <div class="nav">
        <ul>
            <li><a id ="home" href="#home">Home</a></li>
            <li><a id = "contact" href="<?php echo $root?>/PreLogin/contact.php">Contact</a></li>
            <li><a id="about" href="<?php echo $root?>/PreLogin/about.php">About</a></li>
        </ul> 
    </div>
    <div class="first">
        <h2>Welcome to the Find Your Bug site</h2>
        <p>You can sign up into our website either as an attacker or a defender<p>
        <p>Then start hunting bugs if an attacker or start patching your site for silly loopholes</p>
        <a href = "<?php echo $root;?>/Thread/Topic.php?type=WordPress" id="wordpress">
            <img src="<?php echo $root;?>/img/WordPress.png" id="wordpress" alt="wordpress">
        </a>
        <a href = "<?php echo $root;?>Thread/Topic.php?type=Joomla" id="joomla">
            <img src="<?php echo $root;?>/img/Joomla.png" id="joomla" alt="joomla">
        </a>
        <a href = "<?php echo $root;?>/Thread/Topic.php?type=Hidden" id="hidden">
            <img src="<?php echo $root;?>/img/Hidden.jpg" id="hidden" alt="hidden">
        </a>
        <a href = "<?php echo $root;?>/Thread/Topic.php?type=Other" id="other">
            <img src="<?php echo $root;?>/img/Other.png" id="other" alt="other">
        </a>
        <div class="labels">
            <label for="wordpress" id="wp">WordPress</label>
            <label for="joomla" id="joom">Joomla</label>
            <label for="hidden" id="hid">Hidden</label>
            <label for="other" id="oth">Other</label>
        </div>
    </div>
    <div class="home">
</html>