<?php
include '../dat/dbh.php';
error_reporting(E_ERROR | E_PARSE);

function validation($DP, $FP, $DU, $FU){
    if($DU === $FU && $DP === $FP){
        session_start();
        $_SESSION['username'] =  "$DU";
        header("Location: profile_page.php");
    }   
    else{
        header("Location: index.php");
    }
}


$user = sha1($_POST['username']);
$passw = sha1(sha1($_POST['password']));

$sql = "SELECT loginPassw, loginUsername FROM logins
WHERE loginUsername =('$user');";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    $dbUsername = $row['loginUsername'];
    $dbPassw = $row['loginPassw'];
}

validation($dbPassw, $passw, $dbUsername, $user);