<!DOCTYPE html>
<html>
    <head>

        
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <?php 
    include 'includes/db.php';
    include 'insert.php';
    session_start();
        if($result == true) {
            $_SESSION['username'] = $username;
        }
    ?>

    <body>

        <div id="homewrap">
            <div class=title><img src="images/Zody_title-removebg-preview.png"></div>

            <div class="content">
                <h2>Hi There <?php $_SESSION['username']?></h2>
                <h2>Meet [NAME PLACEHOLDER]</h2>
                <h2>They are [ZODIAC PLACEHOLDER]</h2>         
            </div>

            <div class="buttons">
                <div class="btnsDiv"><button class="myButton">Interested</button></div>
                <div class="btnsDiv"><button class="myButton">Not Interested</button></div>
            </div>
        </div>

    </body>
</html>