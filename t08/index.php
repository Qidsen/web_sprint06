<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What about forms</title>
</head>
<body>
    <h1>What Thanos did for the Soul Stone?</h1>
    <form action="index.php" method="post">
        <p><input type="radio" id="first" name="answer" value="1">Jumped from the mountain</p>
        <p><input type="radio" id="second" name="answer" value="2">Made stone keeper to jump from the mountain</p>
        <p><input type="radio" id="third" name="answer" value="3">Pushed Gamora off the mountain</p>
        <p><button type="submit" name="button">I made a choice!</button></p>
    </form>
</body>
</html>

<?php
    if(isset($_POST["answer"]) && $_POST["answer"] == "2")
        echo "You are right!";
    else if(isset($_POST["answer"]))
        echo "Shame on you! Go and watch Avengers!";
?>
