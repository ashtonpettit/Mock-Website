<?php
include 'db.php';
if(isset($_POST["login"])) {
    session_start();
    
    $userData = array();
    $email = $_POST['email'];
    $pass = $_POST['userKey'];
    $userData = loginUser($email, $pass);
    $_SESSION['username'] = $userData['username'];
    $_SESSION['gender'] = $userData['gender'];
    $_SESSION['genderPref'] = $userData['genderPrefer'];
    header("location: ../homepage.php");
    }