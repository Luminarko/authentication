<?php
include 'dat/dbh.php';
include 'index.php';

$first = $_POST['name'];
$last = $_POST['surname'];
$user = $_POST['username'];
$passw = $_POST['password'];

$insert = "INSERT INTO logins (loginName, loginSurname, loginUsername, loginPassw) VALUES ('$first', '$last', '$user', '$passw')";
mysqli_query($connect, $insert);

header("Location: ../index.php");