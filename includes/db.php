<?php 


      $serverName = 'ID328528_project.db.webhosting.be';
      $host = 'ID328528_project';
      $datapass = 'Nothsa93';
      $dbName = 'ID328528_project';
      $port = 3306;

      $conn = mysqli_connect($serverName, $host, $datapass, $dbName, $port);

      if(!$conn) {
          die("Connection Failed " . mysqli_connect_error());
      }
     

