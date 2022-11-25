<?php

error_reporting(E_ERROR | E_PARSE);
include '../dat/dbh.php';
include 'login_page.php';

#verify--------------------

$sql = "SELECT loginUsername, loginPassw FROM logins WHERE";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    $user = $row["loginUsername"];
    $passw = $row["loginPassw"];
};
$lname = $_POST["username"]
$lpassw = $_POST["passw"]

if($user == $lname && $lpassw == $passw){
    echo "You are succesfully looged as $user. :)";
}
else{
    echo "You were not succesfully logged :(";
}
?>