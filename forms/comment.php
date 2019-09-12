<?php
include_once "../includes/Tdb.php";
$thread_id = mysqli_real_escape_string($conn,$_GET['id']);
$type = mysqli_real_escape_string($conn,$_GET['type']);
$content = $_POST['content'];
$username = "TBD";
$query1 = "INSERT INTO comments (content,username,thread_id) VALUES ('$content','$username','$thread_id');";

mysqli_query($conn,$query1);
header("Location: ../Thread/Thread.php?type=$type&id=$thread_id");