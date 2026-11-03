<!DOCTYPE html>
<?php
session_start();
?>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/styling.css"/>
    <link rel="stylesheet" href="../CSS/mobile_view.css" media="screen and (max-width:480px)"/>
    <!--https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/meta/name/viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
    
    <h1>Login</h1>
    <div><img src="../Images/chisholm_logo.jpg" id="logo"/></div>
    <input class="menu-checkbox" type="checkbox" id="menu-checkbox"/>
    <label class="menu-burger" for="menu-checkbox">
        <span class="hamburger"></span>
    </label>
    <nav class="menu">
        <ul><a href="../HTML/Dashboard.php">Dashboard</a></ul>
        <ul><a href="../HTML/student_details.php">Student Details</a></ul>
        <ul><a href="../HTML/enrolments.php">Enrolments</a></ul>
        <ul><a href="../HTML/help_support.php">Help/Support</a></ul>
        <ul><a href="../HTML/results.php">Results</a></ul>
    </nav>
</head>

<body>
    <div class = "door_check" > 
        <form id="door_check" name = "door_check" method="post" action = "../php/entry_check.php" novalidate="novalidate">
            <fieldset>
                <label for="user">Username</label>
                <input type="text" id="user" name="user"/>
            </br>
                <label for="pwd">Password</label>
                <input type="text" id="pwd" name="pwd"/>
            </fieldset>
            <input type="submit" name = "door_check" value="submit" id="door_check">
    </div>
    <div class = "registration">
        <nav class = "registration">
            <ul><a href="../HTML/enrolments.php">Student Register</a></ul>
            <ul><a href="../HTML/sign_up.php">Sign up</a></ul>
        </nav>
    </div> 
</body>

