<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login_page.css">
    <title>LOGIN</title>
</head>
<body>    
    <h1>LOGIN</h1>
    <div class="login_page">
        <form action="login_valid.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <br>
                <input type="password" name="password" placeholder="Password" required>
                <br>
                <input class="sub" type="submit" name="submit" value="LOGIN"></button>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                include 'login_valid.php';
                header('Location: ' . $_SERVER['PHP_SELF']);
                }
            ?>
    </div>        
</body>
</html>