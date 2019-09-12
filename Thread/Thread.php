<?php
include_once "../includes/Tdb.php";
$id = mysqli_real_escape_string($conn,$_GET['id']);
$query1 = "SELECT * FROM threads WHERE id = '$id';";
$query2 = "SELECT * FROM comments WHERE thread_id = '$id'";
$result = mysqli_fetch_assoc(mysqli_query($conn,$query1));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thread</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        echo "<h1>$result[type]</h1>Topic is: $result[topic]<br>Info is: $result[info]";
    ?>
    <form method="POST" action="../forms/comment.php?id=<?php echo $result['id'];?>&type=<?php echo $result['type'];?>">
        <label>Add a Comment</label>
        <input type="text" placeholder="Comment" name="content">
        <button type="submit">Comment</button>
    </form>
    
    <h3>Comments</h3>   
    <?php
        $r = mysqli_query($conn,$query2);
        while($res = mysqli_fetch_assoc($r)){
            echo "User: $res[username] said $res[content]<br><br>";
        }
    ?>

</body>
</html>