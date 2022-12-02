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
        echo "<script language='javascript'>";
        echo 'alert("Přihlášení se nepodařilo...");';
        echo 'window.location.replace("index.php");';
        echo "</script>";
    }
}


$user = sha1($_POST['username']);
$passw = sha1(sha1($_POST['password']));

$sql = "SELECT idlogins, loginPassw, loginUsername FROM logins WHERE loginUsername =('$user');";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    $dbUsername = $row['loginUsername'];
    $dbPassw = $row['loginPassw'];
}

$salts = "SELECT TOP 1 salt FROM request ORDER BY idrequest DESC";
$saltr = mysqli_query($connect, $salt);

while($row = mysqli_fetch_assoc($saltr)){
    $salt = $row['salt'];
}
validation(hash_hmac("sha256", $dbPassw, $salt), hash_hmac("sha256", $passw, $salt), $dbUsername, $user);