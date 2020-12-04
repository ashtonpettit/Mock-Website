<?php
$server = 'localhost';
$username = "root";
$password = "";
$dbname = "create_profile";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['dob']) && !empty($_POST['email']) && !empty($_POST['gender'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $query = "insert into form(firstName, lastName, dob, email, gender) values('$firstName', '$lastName' '$dob' '$email' '$gender')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run) {
            echo "Form submitted successfully";
        }
        else {
            echo "Form not submitted";
        }
    }
    else {
        echo " all fields required"
    }
}


?>