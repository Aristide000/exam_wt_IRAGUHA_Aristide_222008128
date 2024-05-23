<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session
session_start();

// Database connection
$servername = "localhost"; // Change if MySQL is on a different server
$dbusername = "root";
$dbpassword = "";
$dbname = "musicstreaming";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['passwords'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT user_id, username, passwords FROM users WHERE username = ?");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    // Verify password
    if($user && password_verify($password, $user['passwords'])) {
        // Password is correct, set session variables and redirect to index.php
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['passwords'] = $user['passwords'];
        header("Location: index.php");
        exit;
    } else {
        // Invalid username or password
        echo "Invalid username or password";
    }
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="forms.css">
    <style>
        .container h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <h5><center>User Login</center></h5>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="passwords" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login">Login</button>
            </div>
            <p>
                Not a member? <a href="users.php">Register here</a>
            </p>
        </form>
    </div>
</body>
</html>
