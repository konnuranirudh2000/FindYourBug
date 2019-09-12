<?php
include_once "./includes/functions.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FYB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="head">
        <h2>You have logged in as <?php echo type_to_string($_SESSION['type'])?></h2>
        <a href="./PostLogin/logout.php">Logout</a><br><br>
        <a href="./PostLogin/profile.php">Profile</a><br><br>
        <a href = "./Thread/TCreate.php">Create Thread</a><br><br>
        <a href = "./bidding.php">Host</a><br><br>
        <a href="./PostLogin/bidlist.php">List</a><br><br>
        <a href="./PostLogin/mybounties.php">My Bounties</a><br><br>
        <a href="./PostLogin/myreports.php">My Reports</a><br><br>
        <a href="./PreLogin/index.php">Home</a><br><br>
        <a href="./PostLogin/donate.php">Donate</a><br><br>
    </div>
</body>
</html>