<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>
    <header>Authentication</header>
    <br>
    <button type="register" name="register" method="POST">REGISTER</button>
    <button type="login" name="login" method="POST">LOGIN<button>
    
    <?php
        if (isset($_POST['register'])) {
            include 'register_page.php';
            header('Location: ' . $_SERVER['PHP_SELF']);
            }
        
        if (isset($_POST['login'])) {
            include 'login.php';
            header('Location: ' . $_SERVER['PHP_SELF']);
            }
        
        ?>
</body>
</html>