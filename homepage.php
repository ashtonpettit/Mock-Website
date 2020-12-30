
<?php
  include 'includes/db.php';
  include 'includes/includes.php';
  session_start();
  ?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>

    <div id="homewrap">
            <?php include 'includes/header.php'; ?>

    <div class="content">
                <h2>Welcome <?php echo $_SESSION['username'];?></h2>
                <?php $user = $_SESSION['username']; $gender = $_SESSION['gender']; $genderPrefer = $_SESSION['genderPref']; ?>
                

        <div class="peopleHolder"> 
        
            <div class="swipeDiv">
            <button class="myButton" id="swipe">Start Swiping!</button>
            </div>

            <?php
            $num = 0;
                $people = getQuery("SELECT * FROM users WHERE username != '$user'
                AND gender = '$genderPrefer' AND genderPrefer = '$gender'");
                foreach($people as $person) {
                    ?>
                <div class="personClass">                   
                    <h3><?php echo $person['username']; ?></h3>
                    <h3><?php echo $person['age']; ?></h3>
                    <h3><?php echo $person['zodiac']; ?></h3>
                </div>                                    
            <?php
                }
            ?>

            <div class="lastDiv">
                    <div class="endingDiv" id="likeList">
                        <h3>You Liked:</h3>                    
                    </div>

                    <div class="endingDiv" id="dislikeList">
                        <h3>You Disliked:</h3>
                    </div>
            </div>

            <br>
            <br>
            <div class="buttonshome">            
                <button class="myButton" id="liked">Interested</button>
                <button class="myButton" id="disliked">Not Interested</button>               
            </div>
        </div>
           
    </div>
    <?php include 'includes/footer.php'; ?>
        <script src="process.js"></script>
    </body>
</html>