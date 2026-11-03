<!DOCTYPE html>
<?php 
session_start();

?>
<head>
    <title>Dashboard</title>

    <link rel="stylesheet" href="../CSS/styling.css" />
    <link rel="stylesheet" href="../CSS/mobile_view.css" media="screen and (max-width:480px)" />
    <!--https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/meta/name/viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

    <h1>Dashboard</h1>
    <div><img src="../Images/chisholm_logo.jpg" id="logo"/></div>
    <input class="menu-checkbox" type="checkbox" id="menu-checkbox" />
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

    <?php
    if ($_SESSION['loggedIn'] && isset($_SESSION['student'])){
        echo $_SESSION['student']['email'] . " logged In";
    }
    if ($_SESSION['loggedIn'] and isset($_SESSION['admin'])){
        echo $_SESSION['admin']['email'] . "logged In";
    }
    ?>


</head>

<body>
    <div class = "login">
        <nav class = "user_options">
           <ul><a href="../HTML/login.php">Login</a></ul>
           <ul><a href="../HTML/sign_up.php">Register</a></ul>
           <ul><a href="../php/logout.php">Logout</a></ul>
        </nav> 
    </div>

<!--https://www.chisholm.edu.au/about-us/who-we-are-->
    <p>Chisholm Institute is one of Victoria's leading government providers of vocational training and higher education.
        We proudly serve the diverse communities of Melbourne's south east, with seven campuses located in Berwick,
        Cranbourne, Dandenong, Frankston, Rosebud, Springvale and Wonthaggi.

        From short courses to degrees and postgraduate studies, our courses are delivered on campus, online, in the
        workplace, and offshore.

        Our community extends to over 100,000 Chisholm graduates and more than 1,500 current staff. We take pride in our
        diverse student body and workforce and welcome differences in gender, sexual orientation, age, ethnicity,
        cultural background, religion, and ability.</p>
<!--https://worldlandscapearchitect.com/from-campus-to-coast-chisholm-institute-unveils-a-place-specific-landscape/-->
        <img src="../Images/frankston_campus.webp" alt="Frankston's Chisholm Campus" id="campus_dashboard">
</body>