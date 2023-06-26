<?php
$serverName = 'localhost';
$userName = 'root';
$serverPassword = '';
$dbName = 'users';

$conn = mysqli_connect($serverName, $userName, $serverPassword, $dbName);


if(!$conn){
    echo mysqli_error($conn);
}

?>