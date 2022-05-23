<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/x-icon" href="/images/">
    <title>Super Smash Beans</title>
</head>
<body id="indexBody">
    <div class="top" id="top">
        <h1>Super Smash Beans</h1>
            
        <div class="menu" id="menu">
            <a href="index.php">Home</a>
            <a href="About.php">About</a>
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
    
    
        

</body>
</html>