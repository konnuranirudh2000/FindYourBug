<?php
include_once "../includes/Bdb.php";
include_once "../includes/functions.php";
$id = mysqli_real_escape_string($conn,$_GET['id']);
$query = "SELECT * FROM list WHERE id = '$id';";

$bounty = mysqli_fetch_assoc(mysqli_query($conn,$query));

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bounty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class ="head">
        <h1><?php echo $bounty['title']; ?></h1>
        <h3><?php echo level_to_string($bounty['level']); ?></h3>
    </div>
    <div class="content">
        <p id="info"><?php echo $bounty['info']?></p>
        <p id="reward"><?php echo $bounty['reward']?></p>
    </div>
    <div class="contact">
        <p>Username: <?php echo $bounty['username'];?></p>
    </div>
    <form action="createreport.php">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <button type="submit">Submit a vulnerability</button>
    </form><br>
    <form action="reportlist.php">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="submit">View the reports</button>
    </form>
</body>
</html>