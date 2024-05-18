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
    <title>Faculty</title>
    <link rel="stylesheet" href="style_faculty.css">
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
        <div class="cont1">
            <h1 class="heading">Faculty Details</h1>
            <div class="t">
                <div class="pic">
                    <img src="f1.jpg" alt="" class="picf">
                    <a href="mypop.php">About me</a>
                </div>
                <div class="about-pic">
                    <p>Ms. Thompson, a compassionate English teacher, fosters a love for literature and writing through engaging discussions on classic novels and contemporary poetry. She encourages students to express themselves freely, nurturing their creativity and critical thinking.</p>
                </div>
            </div>
            <div class="t">
                <div class="about-pic">
                    <p>Ms. Roberts, a dedicated mathematics teacher, creates a dynamic learning environment where numbers come to life. Her passion for math is infectious as she breaks down complex concepts with clarity and patience. </p>
                </div>
                <div class="pic">
                    <img src="f2.jpg" alt="" class="picf">
                </div>
            </div>
            <div class="t">
                <div class="pic">
                    <img src="f5.jpg" alt="" class="picf">
                </div>
                <div class="about-pic">
                    <p>Coach Johnson, the dedicated PE teacher, goes beyond sports to teach valuable life lessons. Through sportsmanship, teamwork, and physical challenges, he inspires students to develop resilience, leadership, and a healthy lifestyle, both on and off the field.</p>
                </div>
            </div>
            <div class="t">
                <div class="about-pic">
                    <p>Mr. Patel, the enthusiastic science guru, transforms his classroom into an interactive laboratory. Students eagerly anticipate his captivating demonstrations, where chemistry and physics come alive with mesmerizing experiments and hands-on activities.</p>
                </div>
                <div class="pic">
                    <img src="f6.jpg" alt="" class="picf">
                </div>
            </div>
        </div>
        <div class="cont2">
            <h1 class="heading">Principal</h1>
            <div class="t2">
                <div class="pic">
                    <img src="f3.jpg" alt="" class="picf">
                </div>
                <div class="about-pic2"><p>Principal Thompson is a visionary leader with a deep commitment to academic excellence and student well-being. Her warm demeanor and approachable nature create a welcoming school environment. Principal Thompson advocates for innovative teaching methods and fosters a culture of collaboration among staff, students, and parents. She prioritizes student success and holistic development, ensuring every child receives the support they need to thrive.</p></div>
            </div>

            <h1 class="heading-2">Vice-Principal</h1>
            <div class="t2">
                <div class="about-pic2">
                    <p>Vice Principal Ramirez is a dynamic educator known for her exceptional organizational skills and unwavering dedication to student achievement. With a strong background in curriculum development and instructional leadership, Vice Principal Ramirez supports teachers in implementing effective teaching strategies. She is a problem-solver who prioritizes student discipline and safety, ensuring a positive and inclusive school climate. Vice Principal Ramirez's enthusiasm and commitment inspire both staff and students to reach their full potential.</p>
                </div>
                <div class="pic">
                    <img src="f4.jpg" alt="" class="picf">
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="foot">
            <h4>@ Copyright by Debojyoti Debnath</h4>
            <p>
            <h3>Demo School Website</h3>
            </p>
            <p>
            <h3>Created for skillx</h3>
            </p>
            <div class="members">
                <p>
                <h3>Group Members:-</h3>
                </p>
                <p>
                <h4>Debojyoti Debnath</h4>
                </p>
                <p>
                <h4>Rupsa Sarkar</h4>
                </p>
                <p>
                <h4>Sneha Raha</h4>
                </p>
                <p>
                <h4>Priya Bhowmick</h4>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>