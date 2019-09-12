<?php
// include_once "../includes/Bdb.php";
function type_to_string($type){
    if($type==='d'){
        return "Defender";
    } else if($type==='a'){
        return "Attacker";
    } else if($type==='b'){
        return "both Attacker and Defender";
    }
}

function level_to_string($level){
    if($level==='1'){
        return "Beginner";
    } else if($level==='2'){
        return "Intermediate";
    } else if($level==='3'){
        return "Advanced";
    }
}

function spit_bounties($keyword){
    $dbservername = "localhost";
    $db = "bounties";
    $username = "root";
    $pasword = "";

    $conn = mysqli_connect($dbservername,$username,$pasword,$db);
    $result="";
    $query = "SELECT * FROM list WHERE title LIKE '%$keyword%' OR username LIKE '%$keyword%' OR reward LIKE '%$keyword%' OR info LIKE '%$keyword%' OR level LIKE '$keyword';";
    $r = mysqli_query($conn,$query);
    if(mysqli_num_rows($r)<=0){
        return "<p>Could not find anything with the given keyword</p>";
        exit();
    }
    while($topic = mysqli_fetch_assoc($r)){
        $title = $topic['title'];
        $id=$topic['id'];
        $result = $result . "<a href='bid.php?id=$id'>$title</a><br><br>";
    }
    return $result;
}

function spit_reports($user){
    $dbservername = "localhost";
    $db = "bounties";
    $username = "root";
    $pasword = "";
    $conn = mysqli_connect($dbservername,$username,$pasword,$db);
    $result="";

    $query = "SELECT * FROM reports WHERE hunter='$user';";
    $r = mysqli_query($conn,$query);
    if(mysqli_num_rows($r)<=0){
        return "<p>You currently don't have any reports</p>";
        exit();
    }
    while($topic = mysqli_fetch_assoc($r)){
        $title = $topic['title'];
        $id=$topic['id'];
        $result = $result . "<a href='report.php?id=$id'>$title</a><br><br>";
    }
    return $result;

}