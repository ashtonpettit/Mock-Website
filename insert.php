<?php

if(isset($_POST['submit'])) {
    include "includes/db.php"; 
   $email = $_POST['email'];
   $username = $_POST['username'];
   $pass = $_POST['pass'];

   $sql = "INSERT INTO users
   (email, username, pass)
   VALUES ('$email', '$username', '$pass')";

   $result = mysqli_query($conn, $sql);
    header('location: homepage.php');

}