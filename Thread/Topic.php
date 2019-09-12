<?php
include_once "../includes/Tdb.php";
$type = mysqli_real_escape_string($conn,$_GET['type']);
if($type ==="Other"){
    $query1 = "SELECT * FROM `threads` WHERE type != 'WordPress' AND type != 'Joomla' AND type != 'Hidden';";    
} else {
    $query1 = "SELECT * FROM threads WHERE type = '$type';";
}

$r = mysqli_query($conn,$query1);?>
<h1>Topics of type <?php echo $type?></h1>
<?php
while($topic = mysqli_fetch_assoc($r)){
    echo "<a href=Thread.php?type=$type&id=$topic[id]>$topic[topic]</a><br><br>";
}
?>