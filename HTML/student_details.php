<!DOCTYPE html>
<?php
session_start();
?>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="../CSS/styling.css"/>
    <link rel="stylesheet" href="../CSS/mobile_view.css" media="screen and (max-width:480px)"/>
    <!--https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/meta/name/viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>


        <h1>Student Details</h1>
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
    <?php
    if ($_SESSION['loggedIn'] && isset($_SESSION['student'])){
        echo $_SESSION['student']['email'] . " logged In";
    }
    if ($_SESSION['loggedIn'] and isset($_SESSION['admin'])){
        echo $_SESSION['admin']['email'] . "logged In";
    }
    else { header('Location: ../php/login.php'); } 
    ?>
    
    <div class = "login">
        <nav class = "user_options">
           <ul><a href="../php/logout.php">Logout</a></ul>
        </nav> 
    </div>

</head>

<body>


    
    <table class="sir-table">
        <tr>
            <th>Bachelor of IT</th>
            <th>Time</th>
            <th>Unit</th>
            <th>Subject</th>
            
        </tr>
        <tr>
            <td>Monday</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td>Wednesday</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td>Thursday</td>
            <td>9am-12pm + 2pm-5pm</td>
            <td>ITS203 + ITS202</td>
            <td>System and Network Administration + Math Foundations for Computing</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>9am-12pm + 1:00pm-4:00pm</td>
            <td>ITS201 + ITS204</td>
            <td>Inside Information Technolgy + Web Technolgies and Full-Stack Fundamentals</td>
        </tr>
    </table>

</body>