<?php
include '../dat/dbh.php';

$salts = "SELECT salt FROM request ORDER BY idrequest DESC LIMIT 1";
$saltr = mysqli_query($connect, $salts);

if(!$saltr){
    die(mysqli_error($connect));
}

if(mysqli_num_rows($saltr) > 0){
    while($row = mysqli_fetch_assoc($saltr)){
        $salt = $row['salt'];
    }
}