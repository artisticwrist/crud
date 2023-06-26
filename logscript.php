<?php

session_start();
include "connect/connect.php";

if (isset($_POST['username']) && isset($_POST['passcode'])) {


    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['passcode']);

    if (empty($username)) {
        header("Location: login.php?error=User name is required");
        exit();
    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }

    else{

        $sql = "SELECT * FROM `user` WHERE user_name='$username' AND passcode='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $username && $row['passcode'] === $pass) {
                $_SESSION['username'] = $row['user_name'];
                $_SESSION['passcode'] = $row['passcode'];
                header("Location: user.php");
                exit();
            }else{
                header("Location: login.php?error=Incorrect Email or Password");
                exit();
            }

        }else{
            header("Location: login.php?error=Incorrect Email or Password");
            exit();
        }
    }

}else{
    header("Location: login.php");
    exit();
}

?>
