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
           
                $people = getQuery("SELECT * FROM users WHERE username != '$user'
                AND gender = '$genderPrefer' AND genderPrefer = '$gender'
                AND users.username NOT IN (SELECT likedUser FROM userActions)");
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

            <div class="personClass">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>  



$(document).ready(function(){
    var num = 0;
    var listperson = [];
    var divs = document.querySelectorAll(".personClass");
    $('#swipe').on('click', function(){
         
        var persons = document.querySelector(".personClass.is-active");
        var person = persons.children[0].innerHTML;
        listperson.push(person);
        
        
        
      
   
    
    $('#liked').on('click', function(){
        num++;
        var username = "<?php echo $user ?>";
        var likedUser = listperson[0];
        listperson.pop();
        persons = document.querySelector(".personClass.is-active");
        if(persons.children[0].innerHTML == 0){
            alert("The End");
        }

        else {
        person = persons.children[0].innerHTML;
        listperson.push(person);
        
                $.ajax({
                    url: 'includes/updatelikes.php',
                    type: 'POST',
                    data: {
                        'liked': 1,
                        'username': username,
                        'likedUser': likedUser,
                        'action' : "like"
                        },
                        success: function(response){
                            
                        }
                    }); 
                }
        });
    });
}); 

</script>
        
    </body>
</html>