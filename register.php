<?php
session_start();
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $check_username_query = "SELECT * FROM users WHERE username = '$username'";
    $check_username_result = mysqli_query($conn, $check_username_query);

    $check_email_query = "SELECT * FROM users WHERE email = '$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($check_username_result) > 0) {
        $error = "Username already exists. Please choose a different username.";
    } elseif (mysqli_num_rows($check_email_result) > 0) {
        $error = "Email already exists. Please use a different email.";
    } else {
        $hashed_password = md5($password);

        $query = "INSERT INTO users (username, password, email, role) VALUES ('$username', '$hashed_password', '$email', 'user')";
        if (mysqli_query($conn, $query)) {
            $success_message = "Registered successfully. You can now <a href='login.php'>login</a>.";
        } else {
            $error = "Registration failed";
        }
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
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <?php if (isset($success_message)) { ?>
            <p><?php echo $success_message; ?></p>
        <?php } ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
