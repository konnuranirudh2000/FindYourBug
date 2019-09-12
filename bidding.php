<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="head">
        <h2 bg-color="red">Place a bounty</h2>
    </div>
    <form method="POST" action="./forms/bidding.php">
        <label>Bounty name</label>
        <input type="text" id="name" name="name" placeholder="Bounty Title"><br>
        <label>Info about the bounty target</label>
        <input type="text" id="info" name="info" placeholder="Info"><br>
        <label>Bounty Reward</label>
        <input type="text" id="reward" name="reward" placeholder="Reward"><br>
        <label>Level</label>
        <input type="radio" id="beginner" name="level" value="1">
        <label for="beginner">Beginner</label>
        <input type="radio" id="intermediate" name="level" value="2">
        <label for="intermediate">Intermediate</label>
        <input type="radio" id="advanced" name="level" value="3">
        <label for="advanced">Professional</label><br>
        <button type="submit" id="submit">Place the Bounty</button>
    </form>
</body>
</html>