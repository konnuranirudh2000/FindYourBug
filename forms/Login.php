<?php
session_start();
include_once "../includes/db.php";
// Check if username and password is set
if(!isset($_POST['username'])){
    header("Location: ../Login.php?login=error");
    exit();
}
if(!isset($_POST['password'])){
    header("Location: ../Login.php?login=error");
    exit();
}
// Store the form data
$email_or_username = mysqli_real_escape_string($conn,$_POST['username']);
$email_or_username;
$password = mysqli_real_escape_string($conn,$_POST['password']);
// query to check for the user
$query = "SELECT * FROM users WHERE email='$email_or_username' OR username='$email_or_username';";
// Collect the rows with the username and password
$row = mysqli_fetch_assoc(mysqli_query($conn,$query));
// If user exists throw error
if(mysqli_num_rows(mysqli_query($conn,$query))<=0) {
    header("Location: ../Login.php?login=error");
    exit();
} else {
    // Verify Password
    $row = mysqli_fetch_assoc(mysqli_query($conn,$query));
    if(password_verify($password,$row['pass'])){
        $_SESSION['email']=$row['email'];
        $_SESSION['username']=$row['username'];
        $_SESSION['first_name']=$row['first_name'];
        $_SESSION['last_name']=$row['last_name'];
        $_SESSION['type']=$row['type'];
        header("Location: ../index.php?login=success");
    } else {
        // Verification failed
        header("Location: ../Login.php?login=error");
        exit();
    }    
}