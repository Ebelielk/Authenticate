<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['document'])) {
    $file = $_FILES['document'];
    
   
    if ($file['error'] == 0) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($file['name']);
        
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            echo "upload succeeded : " . htmlspecialchars($file['name']);
        } else {
            echo "Error!";
        }
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="document" required>
    <button type="submit">Upload</button>
</form>