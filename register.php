<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
    if ($stmt->execute([$username, $password])) {
        echo "User registered !";
    } else {
        echo "Error : unregistered";
    }
}
?>

<form method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">login</button>
</form>