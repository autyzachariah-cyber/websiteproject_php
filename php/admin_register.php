<?php

session_start();

include "settings.php";


$conn = mysqli_connect($host, $user, $pswd, $dbnm) or die("Failed to connect to server");
if (isset($_POST["door_check"])) {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $con_pwd = $_POST["con_pwd"];

    $valid = true;

    $pattern = "/^[a-zA-Z0-9]+$/";
    if (!preg_match($pattern, $user)) {
        $valid = false;
        echo "Not a valid username";
    }

    $pattern = "/^([a-zA-Z]+([\.\-\_]?[a-zA-Z]+|[a-zA-Z]*)+)+@([a-z]+(\.{1}[a-z]+)+)+$/";
    if (!preg_match($pattern, $email)){
        $valid = false;
        echo "Not a valid email";
    }


   
    $query = "SELECT *
    FROM admin
    WHERE email = '$email'";
    if ($result = mysqli_query($conn, $query)) {
        if(mysqli_num_rows($result) > 0) {
            $valid = false;
            echo "Already registered";
        }
        mysqli_free_result($result);
    }


    $pattern = "/^[a-zA-Z0-9]{1,20}$/";
    if (!preg_match($pattern, $pwd)) {
        $valid = false;
        echo "Not a valid password";
    }
    if ($pwd !== $con_pwd){
        $valid = false;
        echo "Passwords must match";
    }

        if ($valid) {
        $query = "INSERT INTO student(username, 
        email,
        pwd)
        VALUES ('$user',
        '$email',
        '$pwd')";

        if (mysqli_query($conn, $query)) {
            $_SESSION['loggedIn'] = true;

            $query = "SELECT id
            FROM admin
            WHERE email = '$email'";
            $result = mysqli_query($conn, $query) or die("Something went wrong");
            $id = mysqli_fetch_assoc($result);
            $_SESSION['admin'] = $id['id'];

            $_SESSION['username'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['pwd']= $pwd;

            mysqli_free_result($result);
            header ("Location: ../HTML/dashboard.php");



            
        } else {
            echo "Error: " . $query . "<br>";
            header ("Location: ../HTML/sign_up.php");
        }
    }
}
mysqli_close($conn);




?>