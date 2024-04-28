<?php
session_start();
$_SESSION;
include ("connection.php");
include ("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMETHING WAS POSTED
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!is_numeric($email)) {
        //read from database
        $query = "select * from users where Email = '$email' limit 1";

        $result = mysqli_query($con, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['Password'] === $password) {
                    $_SESSION['Email'] = $user_data['Email'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bg">
        <div class="container">
            <form action="" method="post">
                <div class="form-head">
                    <h1>Student Login Page</h1>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" name="password" id="password" placeholder="Enter your password">
                </div>
                <div class="form-foot">
                    <button type="submit" name="submit" class="btn">Login</button>
                </div>
                <p>Don't have an account? <a href="signup.php">Register</a></p>
            </form>
        </div>
    </div>
</body>

</html>