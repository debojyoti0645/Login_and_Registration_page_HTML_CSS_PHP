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
    <title>Document</title>
    <link rel="stylesheet" href="style_notice.css">
</head>

<body>
    <header>
        <div class="head">
            <div class="logo">
                <img src="logo.jpg" alt="School Logo and Name" style="width: 100px; height: 100px;">
                <h1>City High School</h1>
            </div>
            <div class="nav">
                <ul class="ulh">
                    <li class="lih"><a href="index.php">Home</a></li>
                    <div class="profile">
                        <img src="profile.png" alt="" style="width: 20px; height: 20px; margin-right:2px;">
                        <li class="lih"><a href="profile_page.php"><?php echo $user_data['Name']; ?></a></li>
                    </div>
                    <li class="lih"><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </header>
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
        <div class="cont1">
            <div class="head1">
                <h2><u>All Holidays</u></h2>
            </div>
            <br>
            <ol>
                <li>
                    <h3>January:</h3>
                </li>
                <ul class="ulm">
                    <li>January 1: New Year's Day</li>
                    <li>January 12: Birth Anniversary of Swami Vivekananda</li>
                    <li>January 23: Netaji Subhas Chandra Bose Jayanti</li>
                    <li>January 26: Republic Day</li>
                    <li>January 29: Saraswati Puja (Basant Panchami)</li>
                    <li>January 31: Guru Gobind Singh Jayanti</li>
                </ul>
                <li>
                    <h3>February:</h3>
                </li>
                <ul class="ulm">
                    <li>January 1: New Year's Day</li>
                    <li>January 12: Birth Anniversary of Swami Vivekananda</li>
                    <li>January 23: Netaji Subhas Chandra Bose Jayanti</li>
                    <li>January 26: Republic Day</li>
                    <li>January 29: Saraswati Puja (Basant Panchami)</li>
                    <li>January 31: Guru Gobind Singh Jayanti</li>
                </ul>
                <li>
                    <h3>March:</h3>
                </li>
                <ul class="ulm">
                    <li>March 20: Dol Purnima</li>
                    <li>March 28: Bharat Bandh</li>
                </ul>

                <li>
                    <h3>April:</h3>
                </li>
                <ul class="ulm">
                    <li>April 1: Bank Holiday</li>
                    <li>April 7: Good Friday</li>
                    <li>April 14: Bengali New Year (Noboborsho)</li>
                    <li>April 22: Easter Sunday</li>
                </ul>

                <li>
                    <h3>May:</h3>
                </li>
                <ul class="ulm">
                    <li>May 1: Bank Holiday</li>
                    <li>May 15: Buddha Purnima</li>
                    <li>May 25: Ram Navami</li>
                </ul>
                <li>
                    <h3>June:</h3>
                </li>
                <ul class="ulm">
                    <li>June 15: Ramzan Id</li>
                    <li>June 20: Rath Yatra</li>
                </ul>

                <li>
                    <h3>July:</h3>
                </li>
                <ul class="ulm">
                    <li>July 15: Bakrid</li>
                    <li>July 28: Eid al-Adha</li>
                </ul>

                <li>
                    <h3>August:</h3>
                </li>
                <ul class="ulm">
                    <li>August 12: Raksha Bandhan</li>
                    <li>August 15: Independence Day</li>
                    <li>August 20: Janmashtami</li>
                </ul>

                <li>
                    <h3>September:</h3>
                </li>
                <ul class="ulm">
                    <li>September 7: Ganesh Chaturthi</li>
                    <li>September 10: Dussehra</li>
                    <li>September 14: Raksha Bandhan</li>
                    <li>September 28: Anant Chaturdashi</li>
                </ul>

                <li>
                    <h3>October:</h3>
                </li>
                <ul class="ulm">
                    <li>October 2: Gandhi Jayanti</li>
                    <li>October 24: Kali Puja</li>
                    <li>October 24: Diwali</li>
                </ul>

                <li>
                    <h3>November:</h3>
                </li>
                <ul class="ulm">
                    <li>November 1: Guru Nanak Jayanti</li>
                    <li>November 12: Chhath Puja</li>
                    <li>November 14: Children's Day</li>
                </ul>

                <li>
                    <h3>December:</h3>
                </li>
                <ul class="ulm">
                    <li>December 25: Christmas Day</li>
                </ul>
            </ol>
        </div>
        <div class="cont2">
            <div class="head2">
                <h2><u>Important Notice</u></h2>
            </div>
            <div class="not">
                <p>
                <h3>Notice: School Closure on Holi</h3>
                </p><br>
                <p>Dear Students and Parents,</p><br>
                <p>Please be informed that the school will remain closed on Wednesday, March 20, 2024, on account of the
                    Holi festival (Dol Purnima). We encourage everyone to celebrate this joyful occasion with family and
                    friends while observing safety precautions.</p><br>
                <p>Wishing you all a colorful and joyous Holi!</p><br>
                <p>Regards,</p>
                <p>Principal</p>
            </div>
            <hr>
            <div class="not">
                <p>
                <h3>Notice: Payment Reminder - School Fees for the Academic Year 2024-2025</h3>
                </p><br>
                <p>Dear Parents,</p><br>
                <p>We hope this message finds you well. This is a gentle reminder regarding the payment of school fees
                    for the upcoming academic year 2024-2025. We kindly request all parents to ensure timely submission
                    of fees to facilitate smooth operations and continued educational services.</p><br>
                <p>The due date for fee payment is April 15, 2024. Please refer to the fee structure document available
                    on the school website or contact the administration office for details on the fee amounts and
                    payment methods.</p><br>
                <p>For your convenience, fee payments can be made at the school's administrative office during working
                    hours. Additionally, online payment options are available for secure and hassle-free transactions.
                </p><br>
                <p>Should you have any queries or require assistance regarding fee payments, please do not hesitate to
                    reach out to our administration team. We are here to assist you and ensure a seamless fee payment
                    process.</p><br>
                <p>Thank you for your cooperation and continued support in providing quality education to our students.
                </p><br>
                <p>Regards,</p>
                <p>Principal</p>
            </div>
            <hr>
            <div class="not">
                <p>
                <h3>Notice: Class 8 Outing to Botanical Gardens</h3>
                </p><br>
                <p>Dear class 8 students,</p><br>
                <p>Get ready for an exciting outing to the Botanical Gardens on Saturday, March 30, 2024! Please arrive
                    at school by 7:45 AM. Wear comfortable outdoor clothing and bring a packed lunch and water bottle.
                    We look forward to a fun day of learning and exploration!</p><br>
                <p>Regards,</p>
                <p>Principal</p>
            </div>
        </div>
        <div class="cont3">
            <div class="head2">
                <h2><u>Today's Birthdays</u></h2>
            </div>
            <ol class="birthday">
                <li>
                    <h3>Today is Birthday of:</h3>
                </li>
                <ul class="ulm">
                    <li>Riya Sharma (Class 8)</li>
                    <li>Priya Bhowmick (Class 3)</li>
                    <li>Ayush Roy (Class 6)</li>
                    <li>Aditi Sarkar (Class 8)</li>
                    <li>Keshav Pandey (Class 9)</li>
                    <li>Rohan Verma (Class 10)</li>
                </ul>
            </ol>
        </div>
        </div>
    </main>

    <footer></footer>
</body>

</html>