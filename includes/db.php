<?php 

function makeConnection() {
      $serverName = 'ID328528_project.db.webhosting.be';
      $host = 'ID328528_project';
      $datapass = 'Nothsa93';
      $dbName = 'ID328528_project';
      $port = 3306;

      $conn = mysqli_connect($serverName, $host, $datapass, $dbName, $port);

      if($conn == false) {
          die("Connection Failed " . mysqli_connect_error());
      }
      return $conn;
    }

function newUser($email, $username, $age, $pass) {
    $conn = makeConnection();
    $sql = "INSERT INTO users
    (email, username, age, pass)
    VALUES ('$email', '$username', '$age', '$pass')";
    $result = mysqli_query($conn, $sql);
    if(!$result) {
        $user = "here is a new user problem";
    }
    else {
        $user = $username;
        
    }
    mysqli_close($conn);
    return $user;
}

function updateUser($gender, $genderPref, $zodiac, $id) {
    $conn = makeConnection();
    $sql = "UPDATE users 
    SET gender= '$gender', genderPrefer = '$genderPref', zodiac= '$zodiac'
    WHERE username= '$id' ";
    $result = mysqli_query($conn, $sql);
    if(!$result) {
        $data = "here is an update user problem";
    }
    else {
        $data = "Successfully Updated";
        
    }
    mysqli_close($conn);    
    return $data;
}

function loginUser($email, $pass) {
    $conn = makeConnection();
    $query = "SELECT * FROM users 
    WHERE email = '$email' AND pass = '$pass' ";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
    else {
        $row = "D";
    }
    mysqli_close($conn);
    return $row;
} 

function getQuery($query) {
    $conn = makeConnection();
    $result=mysqli_query($conn, $query);
    
    mysqli_close($conn);
    return $result->fetch_all(MYSQLI_ASSOC);
}




     

