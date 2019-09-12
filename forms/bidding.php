<?php
include_once "../includes/Bdb.php";
session_start();
// Collect the data TODO: error handling
$name=mysqli_real_escape_string($conn,$_POST['name']);
$info=mysqli_real_escape_string($conn,$_POST['info']);
$reward = mysqli_real_escape_string($conn,$_POST['reward']);
$level = mysqli_real_escape_string($conn,$_POST['level']);
$username = $_SESSION['username'];
// Push it into the database

$query1= "INSERT INTO list(title,username,reward,info,level) VALUES('$name','$username','$reward','$info','$level');";

// call the query
mysqli_query($conn,$query1);

echo "Done";