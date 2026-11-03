<!DOCTYPE html>
<?php
session_start();
?>
<head>
    <title>Results</title>
    <link rel="stylesheet" href="../CSS/styling.css"/>
    <link rel="stylesheet" href="../CSS/mobile_view.css" media="screen and (max-width:480px)"/>
    <!--https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/meta/name/viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
        <h1>Results</h1>
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
    else { header('Location: ../HTML/login.php'); } 
    ?>
    <div class = "login">
        <nav class = "user_options">
           <ul><a href="../php/logout.php">Logout</a></ul>
        </nav> 
    </div>
</head>

<body>


    
    <table class="effort_table">
        <tr>
            <th>Unit</th>
            <th>Assessment 1</th>
            <th>Assessment 2</th>
            <th>Assessment 3</th>
            
        </tr>
        <tr>
            <td>Maths</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Coding</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td>Web Dev</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td>System and Network Admin</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>

</body>