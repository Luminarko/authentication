<?php
include 'dat/dbh.php';
include 'index.php';

$first = filter_input(INPUT_GET, 'name');
$last = filter_input(INPUT_GET, 'surname');
$user = filter_input(INPUT_GET, 'username');
$passw = filter_input(INPUT_GET, 'password');

$insert = "INSERT INTO logins (lName, lSurname, lUsername, lPassw) VALUES ('$first', '$last', '$user', '$passw')";
mysqli_query($connect, $insert);

header("Location: ../index.php");