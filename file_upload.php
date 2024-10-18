<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['anyF'];
    $uploadDir = 'uploads/';

    // Move the uploaded file to the 'uploads' directory
    $targetFile = $uploadDir . basename($file['name']);
    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        echo "File uploaded successfully!<br>";
        echo "Now you can access your uploaded file: <a href='$targetFile'>Click here</a><br>";

        // After uploading, provide instructions to execute the file
        echo "Execute the uploaded file to retrieve the secret code.";
    } else {
        echo "File upload failed.";
    }
}
?>
