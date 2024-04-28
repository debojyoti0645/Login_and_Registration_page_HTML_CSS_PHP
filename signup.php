<?php
session_start();
include ("connection.php");
include ("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMETHING WAS POSTED
    $name = $_POST['name'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $roll = $_POST['roll'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if ($password == $repassword) {
        $query = "INSERT INTO users (Roll_Number, Name, Class, Section, Gender, Email, Password) VALUES ('$roll', '$name', '$class', '$section', '$gender', '$email', '$password')";
        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Passwords do not match";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bg">
        <div class="container">
            <form action="" method="post">
                <div class="form-head">
                    <h1>Student Registration Page</h1>
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <div class="form-subgroup">
                        <label for="class">Class:</label>
                        <input type="number" name="class" required>
                    </div>
                    <div class="form-subgroup">
                        <label for="section">Section:</label>
                        <input type="character" name="section" required>
                    </div>
                    <div class="form-subgroup">
                        <label for="roll">Roll Number:</label>
                        <input type="number" name="roll" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Fenale">Female
                    <input type="radio" name="gender" value="Others">Others
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter a password" required>
                </div>
                <div class="form-group">
                    <label for="repassword">Confirm Password:</label>
                    <input type="password" name="repassword" id="password" placeholder="Confirm your password" required>
                </div>
                <div class="form-foot">
                    <button type="submit" name="submit" class="btn">Register</button>
                </div>
                Already have an account? <a href="login.php">Login</a>
            </form>
        </div>
    </div>
</body>

</html>