<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/register_page.css">
    <title>REGISTER</title>
</head>
<body>
    <h1>REGISTER</h1>
    <div class="register_page">
        <form action="register.php" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <br>
            <input type="text" name="surname" placeholder="Surname" required>
            <br>
            <input type="text" name="username" placeholder="Username" required>
            <br>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <br>
            <input class="sub" type="submit" name="submit" value="REGISTER"></button>
        </form>
    </div>    
            
        <?php
        include '../dat/dbh.php';
        if (isset($_POST['submit'])) {
            include 'register.php';
            header('Location: ' . $_SERVER['PHP_SELF']);
            }
        
        ?>
        
</body>
</html>