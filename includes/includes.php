<?php 

if(isset($_POST["submit"])) {
    session_start();
    

    $email = $_POST['email'];
    $username = $_POST['name'];
    $age = $_POST['age']; 
    $pass = $_POST['pass'];
      
    $userData = newUser($email, $username, $age, $pass);
    $_SESSION['username'] = $userData;
    $user = $_SESSION['username'];
    
}
else if(isset($_POST["update"])) {
    session_start();
    
    
    $gender = $_POST['gender'];
    $genderPref = $_POST['genderPref'];
    $zodiac = $_POST['zodiac'];
    $id = $_POST['id'];
    $data = updateUser($gender, $genderPref, $zodiac, $id);
    if ($data['username'] == $_SESSION['username']) {
    $_SESSION['gender'] = $gender;
    $_SESSION['prefGender'] = $genderPref;
    }
}


					