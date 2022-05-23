<?php 
session_start();
if ($_SESSION["loggedin"] == true) {

print '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Super Smash Beans</title>
</head>
<body>
    <div class="top" id="top">
        <h1>Super Smash Beans</h2>
            
        <div class="menu" id="menu">
            <a href="index.php">Home</a>
            <a href="About.html">About</a>
            <a href="Download.php">Download</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <br>
    <div class="downloadContent">
        <h1 class="headline">Download Here</h1>
    </div>

    <button class="downloadButton">Download</button>
        
    

    
</body>
</html>';

}

 elseif ($_SESSION["loggedin"] == false) {

    print '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Super Smash Beans</title>
</head>
<body>
    <div class="top" id="top">
        <h1>Super Smash Beans</h2>
            
        <div class="menu" id="menu">
            <a href="index.php">Home</a>
            <a href="About.html">About</a>
            <a href="Download.php">Download</a>
            <a href="Login.php">Login</a>
        </div>
    </div>
    <br>
    <div class="downloadContent">
        <h1 class="headline">Logg inn for å laste ned spillet</h1>
    </div>



    <script>console.log("Ikke innnlogget")</script>
    ';

    }

    ?>
    