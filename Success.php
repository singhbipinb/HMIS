<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Success</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        article {
            background-image: url("img/bg_3.jpg");
            margin-top: 0px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 500px;
        }
    </style>
</head>

<body>
    <header>
        <div class="nav">
            <ul>
                <li><a href="Home.html ">Home</a></li>
                <li><a href="List of Hospitals.html ">Hospitals</a></li>
                <li><a href="# ">About</a></li>
                <li><a href="FAQ.html ">Help</a></li>
                <li><a href="UserLogin.html ">Login</a></li>
                <li><a href="Signup.html">SignUp</a></li>
            </ul>
        </div>
    </header>
    <article id="content ">
        <br>
        <center><img id="done-img" src="img/tick.png"></center>
        <div id="thanks">
            <br>
            <i>You Have Been Successfully Registered
                <br>
                <h3>Thank You</h3>
            </i>

            <button type="submit" class="button" onclick="window.location.href='UserLogin.html'">Login</button>
        </div>
    </article>
    <footer>
        <div class="imp-links ">
            <div class="foot-col ">
                <ul>
                    <li><a href="Appointment.html">Appointments</a></li>
                    <li><a href="List of Hospitals.html">Hospitals List</a></li>
                    <li><a href=#>Health Tips</a></li>
                </ul>
            </div>
            <div class="foot-col ">
                <ul>
                    <li><a href=#>Site Map</a></li>
                    <li><a href=#>Contact</a></li>
                    <li><a href="FAQ.html">Help</a></li>
                </ul>
            </div>
            <div class="foot-col ">
                <ul>
                    <li><a href="FAQ.html">FAQs</a></li>
                    <li><a href=#>Phone</a></li>
                    <li><a href="mailto:info@mmumullana.org?subject=Mail Us">Email</a></li>
                </ul>
            </div>
        </div>
        <div class="copyrights ">
            <p>Copyright© 2020 All Rights Reserved</p>
        </div>
        </br>
    </footer>
</body>

</html>