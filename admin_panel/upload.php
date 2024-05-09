<?php
require_once 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Default userid
$id = 1;

// Check if there is already a record with userid 1
$sql_check = "SELECT * FROM home WHERE id = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("i", $id);
$stmt_check->execute();
$result = $stmt_check->get_result();

// If a record with userid 1 already exists, update data
if ($result->num_rows > 0) {
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    
        // Check if all required fields are filled
        if (!empty($_FILES["slide1"]["name"]) && !empty($_FILES["slide2"]["name"]) && !empty($_FILES["slide3"]["name"])) {
            
            // Set upload directory
            $uploadDir = "uploads/";
    
            // Initialize array to store uploaded file names
            $subImageNames = [];
    
            // Loop through each uploaded file
            for ($i = 1; $i <= 3; $i++) {
                // Generate unique name for the file
                $subImageName = uniqid() . '_' . basename($_FILES["slide{$i}"]["name"]);
                $subImagePath = $uploadDir . $subImageName;
                // Validate and move uploaded file
                if (move_uploaded_file($_FILES["slide{$i}"]["tmp_name"], $subImagePath)) {
                    $subImageNames[] = $subImageName;
                } else {
                    echo "Error uploading file {$i}. Please try again."; // Provide specific error message
                    exit(); // Exit script if upload fails
                }
            }
    
            // Update data in database using prepared statement
            $sql = "UPDATE home SET slide1 = ?, slide2 = ?, slide3 = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $subImageNames[0], $subImageNames[1], $subImageNames[2], $id);
            
            if ($stmt->execute()) {
                echo "<center>Record updated successfully</center>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $stmt->close();
        } else {
            echo "Please fill all required fields."; // Inform user about required fields
        }
    }
} else {
    echo "No data found for id 1. Please insert new data."; // Inform user if no data found for userid 1
}

// Close database connection
$conn->close();
?>
