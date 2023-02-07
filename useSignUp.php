<?php
include('database/connection.php');

if (isset($_POST['signup'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $status = "Active";
    $nrRand = rand(0, 100);
    $user_name = trim($name).trim($nrRand);
    
    $register = "INSERT INTO users (name,email,gender,country,password,status,user_name)
    VALUES ('$name','$email','$gender','$country','$password','$status','$user_name')";

    if (mysqli_query($conn, $register)) {
        echo "Register has been successfully ! Now You Can Login";
    } else {
        echo "Error: " . $register . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
