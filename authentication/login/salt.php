<?php
        include '../dat/dbh.php';
        if (isset($_POST['submit'])) {
            include 'register/register.php';
            header('Location: ' . $_SERVER['PHP_SELF']);
            }

            $salt = random_int(1000, 10000);
            
            date_default_timezone_set('CET');
            $current_time = time();
            $time_limit = 600;
            
            $insert = "INSERT INTO request (salt, time_up) VALUES ('$salt', '$current_time');";
            mysqli_query($connect, $insert);
        
?>