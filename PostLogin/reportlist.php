<?php
include_once "../includes/Bdb.php";
$bounty_id=mysqli_real_escape_string($conn,$_GET['id']);
$query = "SELECT * FROM reports WHERE bounty_id='$bounty_id';";
$r = mysqli_query($conn,$query);
if(mysqli_num_rows($r)<=0){
    return "<p>Could not find anything for this bounty</p>";
    exit();
}
while($topic = mysqli_fetch_assoc($r)){
    $title = $topic['title'];
    $id=$topic['id'];
    echo "<a href='report.php?id=$id'>$title</a><br><br>";
}