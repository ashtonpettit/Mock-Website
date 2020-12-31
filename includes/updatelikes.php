<?php
include 'db.php';
if(isset($_POST['liked'])){

    $serverName = 'ID328528_project.db.webhosting.be';
      $host = 'ID328528_project';
      $datapass = 'Nothsa93';
      $dbName = 'ID328528_project';
      $port = 3306;

    $conn = mysqli_connect($serverName, $host, $datapass, $dbName, $port);
    $username = $_POST['username'];
    $likedUser = $_POST['likedUser'];
    $action = $_POST['action'];
    $sql = "INSERT INTO userActions
    (username, likedUser, userAction)
    VALUES ('$username', '$likedUser', '$action')";
    $result=mysqli_query($conn, $sql);
    
    mysqli_close($conn);
    
    
}