<?php
// Include the database connection file
require_once 'db_connection.php';

// Include the session start file
require_once 'session_start.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to retrieve user information
    $sql = "SELECT * FROM users WHERE username = ?";

    // Prepare statement
    if ($stmt = $mysqli->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_username);

        // Set parameters
        $param_username = $username;

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Store result
            $result = $stmt->get_result();

            // Check if username exists
            if ($result->num_rows == 1) {
                // Fetch row
                $row = $result->fetch_array(MYSQLI_ASSOC);

                // Verify password
                if (password_verify($password, $row['password'])) {
                    // Password is correct, start a new session
                    session_regenerate_id();

                    // Store data in session variables
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $row['role'];

                    // Redirect user based on role
                    if ($_SESSION['role'] == 'admin') {
                        header("location: admin-dashboard.html");
                    } else {
                        header("location: user-dashboard.html");
                    }
                } else {
                    // Display an error message if password is not valid
                    echo "Invalid password";
                }
            } else {
                // Display an error message if username doesn't exist
                echo "Username not found";
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
?>