<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/first_page.css">
    <title>AUTHENTICATION</title>
</head>
<body>

    <div class="first_page">
        <h1>AUTHENTICATION SYSTEM</h1>
    </div>
    <div class="buttons">
        <nav>
            <input type="button" class="reg" onclick="window.location.href='register/index.php';" value="REGISTER"/>
            <input type="button" class="log" onclick="window.location.href='login/index.php';" value="LOGIN"/>
        </nav>
    </div>
    <?php
    include 'dat/dbh.php';

    $salt = random_int(1000, 10000);
    
    date_default_timezone_set('CET');
    $current_time = time();
    $time_limit = 600;
    
    $insert = "INSERT INTO request (salt, time_up) VALUES ('$salt', '$current_time');";
    mysqli_query($connect, $insert);
    ?>
</body>
</html>