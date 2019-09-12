<?php
session_start();
$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Reports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="head">
        <h2>My Reports</h2>
        <p>User: <?php echo $username;?></p>
    </div>
    <?php 
        include_once "../includes/functions.php";
        echo spit_reports($username);
        ?>
    </body>
</html>