<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/register_page.css">
    <title>REGISTER</title>
</head>
<body>
    <h1>WELCOME TO AUTHENTICATION SYSTEM</h1>
    <h2>REGISTER</h2>
        <form action="register/register.php" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <br>
            <input type="text" name="surname" placeholder="Surname" required>
            <br>
            <input type="text" name="username" placeholder="Username" required>
            <br>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <br>
            <input class="sub" type="submit" name="submit" value="REGISTER"></button>
            <p>Are you already registered?<a href="login/index.php">CLICK HERE!</a></p>
        </form>
            
        <?php
        include 'dat/dbh.php';
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
        
</body>
</html>