<?php
include_once "../includes/Bdb.php";
$id = mysqli_real_escape_string($conn,$_GET['id']);
$title = mysqli_real_escape_string($conn,$_POST['title']);
$hunter = mysqli_real_escape_string($conn,$_POST['hunter']);
$info = mysqli_real_escape_string($conn,$_POST['info']);
$file = mysqli_real_escape_string($conn,$_POST['file']);

// get details of the bounty
$query1 = "SELECT * FROM list WHERE id='$id';";
$r = mysqli_fetch_assoc(mysqli_query($conn,$query1));
$prey = $r['username'];
$query2="INSERT INTO reports(title,hunter,prey,bounty_id,report_info,file_name) VALUES('$title','$hunter','$prey','$id','$info','$file')";

// push it into reports db

mysqli_query($conn,$query2);

header("Location: ../PostLogin/createreport.php?status=success");
exit();