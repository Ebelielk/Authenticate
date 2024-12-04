<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome!</h1>
    <?php if(isset($_SESSION['user_id'])): ?>
        <p>Connected!</p>
        <a href="upload.php">upload</a><br>
        <?php else: ?>
            <p>Log In or Sign In</p>
            <a href="login.php">Log In</a><br>
            <a href="register.php">Sign In</a>
    <?php endif;?>
</body>
</html>