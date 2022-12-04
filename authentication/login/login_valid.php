<?php
include '../dat/dbh.php';
require '../salt/salt_select.php';
include '../salt/salt_delete.php';

error_reporting(E_ERROR | E_PARSE);

function validation($DP, $FP, $DU, $FU, $con, $s){
    if($DU === $FU && $DP === $FP){
        session_start();
        $_SESSION['username'] =  "$DU";
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 50);
        salt_delete($con, $s);
        header("Location: profile_page.php");
    }   
    else{
        salt_delete($con, $s);
        echo "<script language='javascript'>";
        echo 'alert("Login was not succesfull...");';
        echo 'window.location.replace("index.php");';
        echo "</script>";
    }
}


$user = sha1($_POST['username']);
$passw = sha1(sha1($_POST['password']));

$sql = "SELECT loginPassw, loginUsername FROM logins WHERE loginUsername =('$user');";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    $dbUsername = $row['loginUsername'];
    $dbPassw = $row['loginPassw'];
}

validation(hash_hmac("sha256", $dbPassw, $salt), hash_hmac("sha256", $passw, $salt), $dbUsername, $user, $connect, $salt);