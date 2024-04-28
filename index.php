<?php
session_start();

include ("connection.php");
include ("functions.php");

$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style_index.css">
</head>

<body>
    <header>
        <div class="head">
            <div class="logo">
                <img src="logo.jpg" alt="School Logo and Name" style="width: 100px; height: 100px;">
                <h1>City High School</h1>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#notice">Notice</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#faculty">Faculties</a></li>
                    <li><a href="#result">Result</a></li>
                    <li><a href="#fee">Fees</a></li>
                    <div class="profile">
                        <img src="profile.png" alt="" style="width: 20px; height: 20px; margin-right:2px;">
                        <li><a href="profile_page.php"><?php echo $user_data['Name']; ?></a></li>
                    </div>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="sub-head">
            <marquee class="marq" direction="right" loop="">
                <div class="marq">
                    Wednesday, 17.4.24 is holiday due to Ram Nabami.
                </div>
            </marquee>
        </div>
        <hr>
    </header>

    <main>
        <div class="content">
            <div class="content-1">
                <img src="scr.jpg" alt="" style="width: 590px; height: 590px;">
            </div>
            <div class="content-2">
                <div class="writing-1">
                    <p>Our school aims at discovering new dimensions of teaching and reaching new horizon of excellence
                        in the field of education. It is teaching discipline, cultural activities like music, drama, and
                        computer, sports as well as the morals of human life. We want that our children Should be
                        perfect in all spheres of life: physical, mental and social. Thus the students would be able to
                        face the world with more practical knowledge besides bookish knowledge. </p>
                </div>
            </div>
        </div>
        <hr>
    </main>

    <footer>

    </footer>

</body>

</html>