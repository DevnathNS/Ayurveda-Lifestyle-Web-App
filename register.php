<?php
session_start();
if(isset($_SESSION['user_id'])) {
    header("Location: user_dashboard.php");
    exit;
}
include('db_config.php');

// Registration form submission
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Other registration fields...

    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')";
    if(mysqli_query($conn, $query)) {
        header("Location: login.php");
        exit;
    } else {
        $error = "Registration failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <?php if(isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <!-- Other registration fields... -->
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
