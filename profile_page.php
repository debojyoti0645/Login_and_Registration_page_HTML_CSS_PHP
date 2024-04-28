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
    <title>My Profile</title>
    <link rel="stylesheet" href="./style_profile.css">
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
                    <li><a href="index.php">Home</a></li>
                    <div class="profile">
                        <img src="profile.png" alt="" style="width: 20px; height: 20px; margin-right:2px;">
                        <li><a href="profile_page.php"><?php echo $user_data['Name']; ?></a></li>
                    </div>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </header>
    <main>
        <div class="profile_container">
            <div class="profile_img">
            <img src="profile.png" alt="" style="width: 200px; height: 200px;">
            </div>
            <div class="profile_info">
                <p>Name: <?php echo $user_data['Name']; ?></p>
                <p>Class: <?php echo $user_data['Class']; ?></p>
                <p>Section: <?php echo $user_data['Section']; ?></p>
                <p>Roll No: <?php echo $user_data['Roll_Number']; ?></p>
                <p>Gender: <?php echo $user_data['Gender']; ?></p>
                <p>Email: <?php echo $user_data['Email']; ?></p>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>