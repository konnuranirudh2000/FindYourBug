<?php
session_start();
include_once "../includes/Bdb.php";
$username = $_SESSION['username'];
$query = "SELECT * FROM list WHERE username='$username';";
$b = mysqli_query($conn,$query);
if(mysqli_num_rows($b)<=0){
    echo "You have no bounties hosted go to host page to host bounties";
} else {
    while($bounties=mysqli_fetch_assoc($b)){
        echo "<a href='bid.php?id=$bounties[id]'>$bounties[title]</a><br><br>";
    }
}