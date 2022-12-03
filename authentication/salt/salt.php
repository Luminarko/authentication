<?php
        require '../dat/dbh.php';
        if (isset($_POST['submit'])) {
            require '../register/register.php';
            header('Location: ' . $_SERVER['PHP_SELF']);
            }

            $salty = random_int(1000, 10000);

            $insert = "INSERT INTO request (salt) VALUES ('$salty');";
            mysqli_query($connect, $insert);
?>