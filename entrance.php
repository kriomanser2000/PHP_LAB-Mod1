<?php
$username = "user123";
$password = "pass123";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="username" value="<?php echo $username; ?>"><br><br>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password" placeholder="password" value="<?php echo $password; ?>"><br><br>
</form>
</body>
</html>
