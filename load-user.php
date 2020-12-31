<?php

if(isset($_POST['liked'])){
$sql = "SELECT * FROM users WHERE username != '$user'
AND gender = '$genderPrefer' AND genderPrefer = '$gender'
AND users.username NOT IN (SELECT likedUser FROM userActions) 
LIMIT 1";
$conn = makeConnection();
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<h2 class='nameplace'>";
        echo $row['username'];
        echo "</h2><br>";
        echo "<h2>";
        echo $row['zodiac'];
        echo "</h2>";
    }
    }
}
    ?>