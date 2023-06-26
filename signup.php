<?php

include 'connect/connect.php';

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['passcode'];

    $checkUser = "SELECT * from user where email='$email'";
    $result=mysqli_query($conn,$checkUser);
    $count = mysqli_num_rows($result);


    if($count>0){
        echo "<script>alert('user already exist')</script>"; 
    }else{
        $sql="INSERT INTO user (user_name,email,passcode)
        VALUES('$username','$email','$pass')";
        if($conn->query($sql)){
            header('Location:success.html');
        }else{
            die(mysqli_error($con));
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up now</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="signup-flex bg" style="background-image: url(./images/Green.jpg);">
        <div class="overlay">
            <nav>
                <h1>SIGNUP NOW</h1>
            </nav>
            <section>
                <h1>Welcome</h1>
                <p>Sign up by entering your details below</p>
            </section>
        </div>
    </div>
    <div class="signup-flex signup-form">
        <nav>
            <div class="ham-burger">
                <div class="burger"></div>
                <div class="burger"></div>
                <div class="burger"></div>
            </div>
        </nav>
        <section class="section-form">
            <form method='post'>
                <h3>WELCOME</h3>
                <p>Sign up by entering your details below</p>
                <input type="email" placeholder="Type email" name='email'>
                <br>
                <input type="text" name="username" placeholder="Type username">
                <br>
                <input type="password" placeholder="Type password" name='passcode'>
                <div class="form-group">
                    <button>Forgot pasword?</button>
                </div>
                <button class="signup-btn" name='submit' type='submit'>Sign Up</button>
            </form>
            <P class="have-account">Already have an account ? <a href="login.php">Sign In</a></P>
        </section>
        <footer>
            <p>copyright reserved. @theblackwrist inc.</p>
        </footer>
    </div>
</body>
</html>