<?php
session_start();
include('database/connection.php');
if (isset($_POST["login"])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $user = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
    $query = mysqli_query($conn, $user);
    $checkUser = mysqli_num_rows($query);

    if ($checkUser == 1) {
        $_SESSION['email'] = $email;
        echo "<script>window.open('home.php','_self')</script>";
    } else {
        echo "Email or Password Invalide";
    }
}
?>
