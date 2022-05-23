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
        <h1>Super Smash Beans</h1>
        
        <div class="menu" id="menu">
            <a href="index.php">Home</a>
            <a href="About.html">About</a>
            <a href="Download.php">Download</a>
            <?php
                session_start ();
                if($_SESSION ["loggedin"] != true) {
                    $knapp = '<a href="register.php">Login</a>';
                }
                elseif($_SESSION ["loggedin"] == true) {
                    $knapp = '<a href="logout.php">Logout</a>';
                }
                print $knapp;
            ?>
        </div>
    </div>
    <br>
    <div class="aboutContent">
        <h1 class="headline">About the game</h1>
    </div>
    <div class="aboutContent">
        <p>
            Very cool game. Pretty guud. Not finished but soon gonna be good <br>
            plzz ple tank u
        </p>
        <div id="aboutImage">
            <img src="Images/Super_Smash_Beans.png" alt="test image" width="960" height="427">
        </div>
    </div>
    

    
</body>
</html>