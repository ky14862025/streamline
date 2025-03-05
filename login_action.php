<?php
session_start(); // Start the session
include '../settings/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Query to fetch user details
    $sql = "SELECT * FROM Users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variable and redirect to dashboard
            $_SESSION['username'] = $username;
            header("Location: ../view/Dashboard.php");
            exit;
        } else {
            echo "Incorrect username or password";
        }
    } else {
        echo "Incorrect username or password";
    }
    
    $stmt->close();
}

$conn->close();
?>
