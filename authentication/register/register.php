<?php
include '../dat/dbh.php';

$first = $_POST['name'];
$last = $_POST['surname'];
$user = sha1($_POST['username']);
$passw = sha1(sha1($_POST['password']));
$role = 'user';

$insert = "INSERT INTO logins (loginName, loginSurname, loginUsername, loginPassw, rName) VALUES ('$first', '$last', '$user', '$passw', '$role');";
mysqli_query($connect, $insert);

header('Location: ' . '../login/index.php');