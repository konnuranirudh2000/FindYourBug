<?php
include_once "../includes/Tdb.php";
$topic = mysqli_real_escape_string($conn,$_POST['topic']);
$type = mysqli_real_escape_string($conn,$_POST['type']);
$info = mysqli_real_escape_string($conn,$_POST['info']);
$query1 = "SELECT * FROM threads WHERE topic='$topic';";

$r = mysqli_query($conn,$query1);
echo "$topic is the topic and type is $type";
if(mysqli_num_rows($r)>0){
    echo "The thread already exists and its link is";
    exit();
}

if($type==="Other"){
    $type = $_POST['other'];
}
echo "The type is $type";
$query2 = "INSERT INTO threads(topic,type,info) VALUES ('$topic','$type','$info')";
mysqli_query($conn,$query2);

echo"Your thread is created";