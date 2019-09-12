<?php
include_once "../includes/Bdb.php";
include_once "../includes/functions.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="head">
        <h2>List</h2>
        <form method ="POST" action="">
            <input type="text" name="search" placeholder="Search">
            <button type="submit">Search</button><br><br>
        </form>
    </div>
    <div class="table">
        <?php 
            if(isset($_POST['search'])){
                echo spit_bounties($_POST['search']);
            }
        ?>
    </div>
</body>
</html>
