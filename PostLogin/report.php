<?php
session_start();
include_once "../includes/Bdb.php";
$id = mysqli_real_escape_string($conn,$_GET['id']);

$query="SELECT * FROM reports WHERE id='$id';";
$r = mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($r);
$title=$result['title'];
$hunter=$result['hunter'];
$prey=$result['prey'];
$bounty_id=$result['bounty_id'];
$info=$result['report_info'];
$file=$result['file_name'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="head">
        <h2>Report</h2>
    </div>
    <div class="body">
        <p>Title: <?php echo $title;?></p>
        <p><?php echo "$prey was reported as hunted by $hunter";?></p>
        <p>Check the Bounty <a href="bid.php?id=<?php echo $bounty_id;?>">here</a></p>
        <p> The report was: <br></p>
        <p><?php echo $info?></p>
        <p>Download the report <a href="../reports/<?php echo $file;?>">here</a></p>
    </div>
</body>
</html>