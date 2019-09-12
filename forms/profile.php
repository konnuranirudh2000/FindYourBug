<?php
session_start();
include_once "../includes/db.php";
// Check if the user is logged in
if(!isset($_SESSION['username'])){
    echo "You are not logged in please log in and try again";
    exit();
}
// Store the data from the form and session
$username=mysqli_real_escape_string($conn,$_SESSION['username']);
$first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
// Check if the user exists
$query1="SELECT * FROM users WHERE email='$email';";
// Update the data
$query2="UPDATE users SET first_name = '$first_name', last_name='$last_name', email='$email' WHERE username='$username';";
if(mysqli_num_rows(mysqli_query($conn,$query1))>=1){
    echo "The user already exists <br><a href='../PostLogin/profile.php'>Back to Profile</a>";
    // header("Location: ../PostLogin/profile.php");
} else {
    
    mysqli_query($conn,$query2);
    echo "Your requested changes have been updated<br><a href='../PostLogin/profile.php'>Back to Profile</a>";
    $_SESSION['first_name']=$first_name;
    $_SESSION['last_name']=$last_name;
    $_SESSION['email']=$email;
    // header("Location: ../PostLogin/profile.php");
}