<?php
$uploadDir = '/var/www/html/uploads/';
$uploadFile = $uploadDir . basename($_FILES['uploadedFile']['name']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $uploadFile)) {
        echo "File uploaded successfully to: " . htmlspecialchars($uploadFile);
    } else {
        echo "File upload failed.";
    }
} else {
    echo "Invalid request.";
}
?>
