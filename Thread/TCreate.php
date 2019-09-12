<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Fill the form and post a thread</h1>
    <form method="POST" action="../forms/TCreate.php">
        <div>
            <label>Topic</label>
            <input type="text" placeholder="Topic" maxlength="50" name="topic">
        </div>
        <div>
        <label>Type of website:</label>
        </div>
        <div>
            <input type="radio" id="WordPress" name="type" value="WordPress">
            <label for="WordPress">WordPress</label>
        </div>

        <div>
            <input type="radio" id="Joomla" name="type" value="Joomla">
            <label for="Joomla">Joomla</label>
        </div>

        <div>
            <input type="radio" id="Hidden" name="type" value="Hidden">
            <label for="Hidden">Hidden</label>
        </div>
        <div>
            <input type="radio" id="Other" name="type" value="Other">
            <label for="Other">Other</label>
        </div>
        <p>If other please specify</p>
        <div>
            <label>Specify if any other type</label>
            <input type="text" id="other" name="other" placeholder="please specify the type">
        </div>
        <div>
            <p><label>Info about your website:</label></p>
            <input type="text" id="info" name="info" placeholder="information" style="width: 400px; height: 50px;" maxlength="1000">
        <div>
            <button type="submit">Create Thread</button>
        </div>
    </form>
</body>
</html>