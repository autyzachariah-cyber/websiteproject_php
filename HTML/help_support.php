<!DOCTYPE html>
<?php
session_start();
?>
<head>
    <title>Help/Support</title>
    <div><img src="../Images/chisholm_logo.jpg" id="logo"/></div>
    <link rel="stylesheet" href="../CSS/styling.css"/>
    <link rel="stylesheet" href="../CSS/support.css">
    <link rel="stylesheet" href="../CSS/mobile_view.css" media="screen and (max-width:480px)"/>
    <!--https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/meta/name/viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
    

    <h1>Help/Support</h1>

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
    elseif ($_SESSION['loggedIn'] and isset($_SESSION['admin'])) {
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
<form id="testform" method="post" action="../php/support_validation.php" novalidate="novalidate">
    <fieldset>
    <label for="name">Enter your Name</label>
    <input type="text" id="name" name="name" placeholder="name contain alphabet only"/>
    <span id="nameTip" class="tooltip"></span>
    <br/>
    <label for="gender">Gender</label>
    <input type="radio" id="Female" name="gender">Female</input>
    <input type="radio" id="Male" name="gender">Male</input>
    </fieldset>
    <fieldset>
        <label for="state">State:</label>
        <select id="state" name="state">
            <option value=""></option>
            <option value="VIC">VIC</option>
            <option value="NSW">NSW</option>
            <option value="QLD">QLD</option>
            <option value="WA">WA</option>
            <option value="NT">NT</option>
            <option value="TAS">TAS</option>
            <option value="SA">SA</option>
            </select>
    </fieldset>
    <br/>
    <fieldset>
        <legend>What is the nature of the support you need? Check any that apply:</legend>
        <input type="checkbox" id="personal" name="support[]" value="personal" class="support">
        <label for="personal">Personal</label>
        <input type="checkbox" id="financial" name="support[]" value="financial" class="support">
        <label for="financial">Financial</label>
        <input type="checkbox" id="educational" name="support[]" value="educational" class="support">
        <label for="educational">Educational</label>
        <input type="checkbox" id="enrolment" name="support[]" value="enrolment" class="support">
        <label for="enrolment">Enrolment</label>
    </fieldset>

    <p>
        <input type="submit" name = "form_submission" value="submit" id="form_submission">
    </p>
</form>
</body>
