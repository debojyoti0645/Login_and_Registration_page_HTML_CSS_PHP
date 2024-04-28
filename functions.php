<?php
function check_login($con)
{
    if (isset($_SESSION['Email'])) {

        $id = $_SESSION['Email'];
        $query = "select * from users where Email = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    } else {
        //redirect to login
        header("Location: login.php");
        die;
    }
}