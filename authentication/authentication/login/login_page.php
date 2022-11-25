<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsSHA/2.0.2/sha.js"></script>
    <script type="text/javascript" src="../register/passwd.js"></script>
    <title>Login Page</title>
</head>
<body>
<form action="/login.php" method="POST">
            <input type="text" name="username" placeholder="username" required>
            <br>
            <input type="password" onclick="mySubmit(this)" id="passwd" name="password" placeholder="password" required>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
</body>
</html>