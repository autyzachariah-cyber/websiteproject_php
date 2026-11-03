<?php
session_start();

include "settings.php";



$conn = mysqli_connect($host, $user, $pswd, $dbnm) or die("Failed to connect to server");
if (isset($_POST["enrollment_submission"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $course = $_POST["course"];
    $pass = $_POST["pass"];
    $confirmPass = $_POST["confirmPwd"];



    $valid = true;
    
    $pattern = "/^[a-zA-Z]+$/";
    if (!preg_match($pattern, $name)) {
        $valid = false;
        echo "Not a valid name";
    }
    $pattern = "/^([a-zA-Z]+([\.\-\_]?[a-zA-Z]+|[a-zA-Z]*)+)+@([a-z]+(\.{1}[a-z]+)+)+$/";
    if (!preg_match($pattern, $email)){
        $valid = false;
        echo "Not a valid email";
    }


   
    $query = "SELECT *
    FROM student
    WHERE email = '$email'";
    if ($result = mysqli_query($conn, $query)) {
        if(mysqli_num_rows($result) > 0) {
            $valid = false;
            echo "Already registered";
        }
        mysqli_free_result($result);
    }
    
   

    if (empty($course)){
        $valid = false;
        echo "Course needs to be selected";
    }

    $pattern = "/^[a-zA-Z0-9]{1,20}$/";
    if (!preg_match($pattern, $pass)) {
        $valid = false;
        echo "Not a valid password";
    }
    if ($pass !== $confirmPass){
        $valid = false;
        echo "Passwords must match";
    }
    


    $course = implode(",", $course);

    if ($valid) {
        $query = "INSERT INTO student(name, 
        email,
        phone,
        address,
        course,
        pass)
        VALUES ('$name',
        '$email',
        '$phone',
        '$address',
        '$course',
        '$pass')";

        if (mysqli_query($conn, $query)) {
            $_SESSION['loggedIn'] = true;

            $query = "SELECT id
            FROM student
            WHERE email = '$email'";
            $result = mysqli_query($conn, $query) or die("Something went wrong");
            $id = mysqli_fetch_assoc($result);
            $_SESSION['student'] = $id['id'];

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['phone']= $phone;
            $_SESSION['address']= $address;
            $_SESSION['course'] = $course;

            mysqli_free_result($result);
            header ("Location: ../HTML/student_details.php");



            
        } else {
            echo "Error: " . $query . "<br>";
            header ("Location: ../HTML/enrolments.php");
        }
    }
}
mysqli_close($conn);
?>