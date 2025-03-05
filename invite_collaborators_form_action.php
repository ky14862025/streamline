<?php
session_start();

// Include database connection
include '../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_invitations'])) {
    // Get the number of members from the session
    if (!isset($_SESSION['num_members']) || $_SESSION['num_members'] <= 0) {
        $_SESSION['error'] = "Invalid number of members.";
        header("Location: ../view/individual_board.php");
        exit;
    }
    
    $num_members = $_SESSION['num_members'];
    
    // Get the board ID from the session
    if (!isset($_SESSION['board_id'])) {
        $_SESSION['error'] = "Board not selected.";
        header("Location: ../view/create_board.php");
        exit;
    }
    
    $board_id = $_SESSION['board_id'];
    
    // Loop through each member and send invitation
    for ($i = 1; $i <= $num_members; $i++) {
        $username = $_POST["username$i"];
        
        // Check if the user exists
        $stmt = $conn->prepare("SELECT user_id FROM Users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user_id = $row['user_id'];
            
            // Add the user to the Team_members table
            $stmt = $conn->prepare("INSERT INTO Team_members (board_id, user_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $board_id, $user_id);
            $stmt->execute();
        } else {
            // User does not exist, handle error
            // You can log this error or inform the user
            // For simplicity, we'll skip it
            continue;
        }
    }
    
    $_SESSION['success'] = "Invitations sent successfully.";
    header("Location: ../view/individual_board.php");
    exit;
} else {
    // Redirect to the form if accessed directly
    header("Location: ../view/invite_collaborators_form.php");
    exit;
}
?>
