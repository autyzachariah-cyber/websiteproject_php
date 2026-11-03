<?php

session_start();


include "settings.php";
$conn = mysqli_connect($host, $user, $pswd, $dbnm) or die("Failed to connect to server");

if (isset($_POST["door_check"])) {
    $username = $_POST["user"];
    $pwd = $_POST["pwd"];

    $valid = true;

    $pattern = "/^([a-zA-Z]+([\.\-\_]?[a-zA-Z]+|[a-zA-Z]*)+)+@([a-z]+(\.{1}[a-z]+)+)+$/";
    if (!preg_match($pattern, $username)){
        $valid = false;
        echo "Not a valid username";
    }
    $pattern = "/^[a-zA-Z0-9]+$/";
    if (!preg_match($pattern, $pwd)) {
        $valid = false;
        echo "Not a valid password";
    }
    
    if ($valid) {
        $query = "SELECT *
        FROM student
        WHERE email = '$username' 
        AND pass = '$pwd'";
        if ($result = mysqli_query($conn, $query)) {
            if(mysqli_num_rows($result) == 1){
                $_SESSION['loggedIn'] = true;
                $id = mysqli_fetch_assoc($result);
                $_SESSION['student'] = $id;
                header("Location: ../HTML/student_details.php");
            }
        }
        
        $query = "SELECT *
        FROM admin
        WHERE email = '$username'
        AND pwd = '$pwd'";
        if ($result = mysqli_query($conn, $query)) {
            if(mysqli_num_rows($result) == 1){
                $_SESSION['loggedIn'] = true;
                $id = mysqli_fetch_assoc($result);
                $_SESSION['admin'] = $id;
                header("Location: ../HTML/reults.php");
                    
            }
        }
    }
}


?>