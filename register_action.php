<?php
include '../settings/connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $date_of_birth = $_POST["dob"];
    $phone_number = $_POST["phonenumber"];
    
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO Users (username, email, password, gender, date_of_birth, phone_number) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $email, $hashed_password, $gender, $date_of_birth, $phone_number);
    
    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        echo '<script> window.location.href= "../login/Loginpage.php";</script>';;
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>