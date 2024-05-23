<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="forms.css">
    <style>
        .container h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="users.php">
            <h5><center>User Registration</center></h5>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="confirm_password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">Log in</a>
            </p>
        </form>
    </div>

    <?php
    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

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

    // CREATE operation
    if (isset($_POST['reg_user'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if passwords match
        if ($_POST['password'] != $_POST['confirm_password']) {
            echo "Passwords do not match!";
        } else {
            // Prepared statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO users (username, email, passwords) VALUES (?, ?, ?)");
            if ($stmt === false) {
                die("Error preparing statement: " . $conn->error);
            }

            $stmt->bind_param("sss", $username, $email, $password);

            if ($stmt->execute() === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }

    // READ operation
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["user_id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. $row["passwords"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
