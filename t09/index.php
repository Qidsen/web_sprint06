<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.post {
    height: 200px;
    padding: 10px 10px 10px 40px;
    border: 2px solid black;
    background-color: darkgray;
    margin-bottom: 20px;
}
form{
    border: 1px solid black;
    padding: 40px 20px 30px;
}
.info{
    border: 1px solid black;
    padding: 20px 10px;
}
.about {
    position: absolute;
    top: 352px;
    padding: 5px;
    background-color: white;
}
</style>
<body>
    <h1>New Avenger application</h1>
    <div class="post">
        <p>POST</p>
        <?php

            $arr = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "age" => $_POST["age"],
                "description" => $_POST["description"],
                "photo" => $_POST["photo"]
            ];
            
            if($arr["name"]) {
                
                echo "<pre>";
                print_r ($arr);
                echo "</pre>";
            }

        ?>
    </div>

    <form action="index.php" method="post">
        <div class="info">
            <span class="about">About candidate</span><br>
            <span>Name</span>
            <input type="text" name="name" required placeholder="Tell your name"></input>
            <span>E-mail</span>
            <input type="text" name="email" required placeholder="Tell your e-mail"></input>
            <span>Age</span>
            <input type="number" name="age" size="6" required min="1" max="999" step="1"></input><br><br>
            <span>About</span>
            <textarea rows="5" cols="52" name="description" required maxlength="500" placeholder="Tell about yourself, max 500 symbols"></textarea><br><br>
            <span>Your Photo:</span>
            <input type="file" name="photo" required> </input>
        </div><br>
        <input class="clear_button" type="reset" value="CLEAR">
        <input class="send_button" type="submit" value="SEND"></input>
    </form>
</body>
</html>
