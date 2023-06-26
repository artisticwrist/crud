
<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['passcode']) ) {

include 'connect/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            flex-direction:column;
        }


        body button{
            margin: 20px 0px;
            border:none;
            background:rgb(95,228,111);
            width:150px;
            height:45px;
            border-radius:5px;
        }


        button a{
            color:white;
            text-decoration:none;
        }

    </style>
</head>
<body>
     <h1>Hello <?php echo$_SESSION['username']?></h1>
     <button><a href="logout.php">Log out</a></button> 
</body>
</html>

<?php
}else {
    header("Location: signup.php");
    exit();
}

?>