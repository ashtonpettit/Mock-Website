<!DOCTYPE html>
<html>
    <head>

        <title>_PLACEHOLDER_</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
       

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

                    <?php
                    include "./includes/db.php";                      
                    ?>
        <div class="wrapper"> 
                    <div class="title"><img src="images/Zody_title-removebg-preview.png"></div>
                        
                        <div class="buttons">
                            
                           
                            <div class="btnsDiv"><a href="#modalLogin" class="myButton"><b>Find Your Love</b></a></div>
                            <div class="btnsDiv"><a href="#modal" class="myButton"><b>Create Profile</b></a></div>
    
                        </div>
                    </div>
        
                    <div class="modal_container" id="modal">
                        <div class="modal">
                            <a href="#" class="close">X</a>
                            <span class="modal_heading">
                                <b>ENTER YOUR DETAILS</b>
                            </span>
                            <form method="POST" action="insert.php">
                                <input type="text" name="email" placeholder="Email"><br>
                                <input type="text" name="username" placeholder="Username"><br>
                                <input type="password" name="pass" placeholder="Password"><br>
                                <input type="submit" name="submit" class="myButton" value="REGISTER">
                            </form>
                        </div>
                    </div> 

                    <div class="modal_container" id="modalLogin">
                        <div class="modal">
                            <a href="#" class="close">X</a>
                            <span class="modal_heading">
                                <b>LOGIN DETAILS</b>
                            </span>
                            <form action="#">
                                <input type="text" placeholder="Username"><br>
                                <input type="password" placeholder="Password"><br>
                                <input type="submit" class="myButton" value="LOGIN">
                            </form>
                        </div>

                    </div> 

    </body>
    
</html>