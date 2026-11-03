<?php

session_start();

include "settings.php";




$conn = mysqli_connect($host, $user, $pswd, $dbnm) or die("Failed to connect to server");

if (isset($_POST["form_submission"])){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $state = $_POST["state"];
    $support = $_POST["support"];

    $valid = true;

    $pattern="/^[a-zA-Z]*$/";
    if (!preg_match($pattern, $name)){
        $valid = false;
        echo "Not a valid name";
    } 

    if(!isset($_POST["gender"])){
        $valid = false;
        echo "Please select an option for gender";
    }

    if (empty($_POST["state"])) {
        $valid = false;
        echo "Please select state";
    }

    if (empty($support)) {
        $valid = false;
        echo "Please select the form of support required";
    }

    $support = implode(",", $support);

    if ($valid) {
        $query = "INSERT INTO support(name, 
        gender,
        state,
        support_type)
        VALUES ('$name',
        '$gender',
        '$state',
        '$support')";

        if (mysqli_query($conn, $query)) {
            $_SESSION['loggedIn'] = true;
// TODO:
// When login and sessions are implemented,
// get the student ID from the session instead of the form.
// Use the session value to link support requests to the logged-in student.
            $query = "SELECT id
            FROM student
            WHERE email = '$email' ";
            $result = mysqli_query($conn, $query) or die("Something went wrong");
            $id = mysqli_fetch_assoc($result);
            $_SESSION['student'] = $id['id'];


            mysqli_free_result($result);
            header("Location: ../HTML/student_details.php");
        }
        else {
            echo "Error: " . $query . "<br>";
            header("Location: ../HTML/help_support.php");
            }
    }
}
mysqli_close($conn);

?>