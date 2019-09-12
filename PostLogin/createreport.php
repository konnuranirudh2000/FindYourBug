<?php
session_start()?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="head">
        <h2>Report</h2>
    </div>
    <div class="form">
        <form enctype="multipart/form-data" method="POST" action="../forms/createreport.php?id=<?php echo $_GET['id'];?>">
            <label>Title:</label>
            <input type="text" name="title" id="title"><br><br>
            <label>Hunter:</label>
            <input type="text" name="hunter" id="hunter" value="<?php echo $_SESSION['username'];?>"><br><br>
            <label>Info:</label>
            <input type="text" name="info" id="info"><br><br>
            <label>Report File:</label>
            <input type="file" name="file" id="file" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" multiple="false"><br><br>
            <button type="submit">Submit the report</button>
        </form>
    </div>
    <div class="result">
        <?php if(isset($_GET['status'])&&$_GET['status']==='success'){
            echo "<h3>Your report has been submitted successfullys</h3>";
            exit();
        }?>
</body>
</html>