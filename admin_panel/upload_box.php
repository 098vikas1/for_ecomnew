<?php
require_once 'config.php';

// Setting default user ID
$id = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $aboutheading = $_POST['aboutheading'];
    $box1about = $_POST['box1about'];
    
    // Handle image upload
    $target_dir = "uploads/"; // Directory where the file will be stored
    $target_file = $target_dir . basename($_FILES["box1image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["box1image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["box1image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["box1image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["box1image"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Get the name of the uploaded image file
    $image_name = basename($_FILES["box1image"]["name"]);

    // Check if a record with user ID 1 already exists
    $existingRecord = $conn->query("SELECT * FROM uploadboxabout WHERE id = $id")->fetch_assoc();

    if ($existingRecord) {
        // If a record exists, update it
        $sql = "UPDATE uploadboxabout SET aboutheading = ?, box1about = ?, box1image = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $aboutheading, $box1about, $image_name, $id);
    } else {
        // If no record exists, insert a new one
        $sql = "INSERT INTO uploadboxabout (id, aboutheading, box1about, box1image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $id, $aboutheading, $box1about, $image_name);
    }

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record added/updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

?>
