<?php
include '../dat/dbh.php';
require '../salt/salt_select.php';

error_reporting(E_ERROR | E_PARSE);

function validation($DP, $FP, $DU, $FU){
    if($DU === $FU && $DP === $FP){
        session_start();
        $_SESSION['username'] =  "$DU";
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 10);
    }   
    else{
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
if($salt != null){
    validation(hash_hmac("sha256", $dbPassw, $salt), hash_hmac("sha256", $passw, $salt), $dbUsername, $user);
    header("Location: profile_page.php");
    }else{
        echo "<script language='javascript'>";
        echo 'alert("Login was not succesfull...");';
        echo 'window.location.replace("index.php");';
        echo "</script>";
    }