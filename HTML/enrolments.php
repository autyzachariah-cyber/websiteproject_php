<!DOCTYPE html>

<head>
    <title>Enrolments</title>
    <link rel="stylesheet" href="../CSS/styling.css"/>
    <link rel="stylesheet" href="../CSS/mobile_view.css" media="screen and (max-width:480px)"/>
    <!--https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/meta/name/viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
    
    <h1>Enrolments</h1>
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
    <div>
        <nav class = "login">
           <ul><a href="../HTML/login.php">Login</a></ul>
           <ul><a href="../HTML/sign_up.php">Register</a></ul>
           <ul><a href="../php/logout.php">Logout</a></ul>
        </nav> 
    </div>

<form id="enrolment_form" method="post" action="../php/enrolling.php" novalidate="novalidate">
    <fieldset>
    <label for="name">Enter your Name</label>
    <input type="text" id="name" name="name" placeholder="name contain alphabet only" />
    </br>
    <label for="email">Email Address</label>
    <input type="text" id="email" name="email" placeholder="Enter Email Address here" />
    </br>
    <label for="address">Home Address</label>
    <input type="text" id="address" name="address" placeholder="Enter only letters and numbers"/>
    </br>
    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" placeholder="Phone has numbers only"/>
    </fieldset>    
    <br/>
    <fieldset>
<!--https://www.hashbangcode.com/article/html-checkbox-php-array-->
<!--https://www.w3schools.com/php/func_string_implode.asp-->
        <legend> Check any courses you wish to apply for: </legend>
        <input type="checkbox" id="IT" name="course[]" value="IT" class="course">
        <label for="IT">IT</label>
        <input type="checkbox" id="Business" name="course[]" value="Business" class="course">
        <label for="Business">Business</label>
        <input type="checkbox" id="Psychology" name="course[]" value="Psychology" class="course">
        <label for="Psychology">Psychology</label>
        <input type="checkbox" id="Engineering" name="course[]" value="Engineering" class="course">
        <label for="Engineering">Engineering</label>
    </fieldset>
    <fieldset>
        <label for="pass">Password: </label>
        <input type="text" id="pass" name="pass" />
    </br>
        <label for="confirmPwd">Confirm Password: </label>
        <input type="text" id="confirmPwd" name="confirmPwd" />


    <p>
        <input type="submit" name = "enrollment_submission" value="submit" id="enrollment_submission">
    </p>
</form>
    

    

</body>