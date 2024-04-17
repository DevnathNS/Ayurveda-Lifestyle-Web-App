<?php
session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}
include('../db_config.php');

// Delete user
if(isset($_POST['delete_user'])) {
    $user_id = $_POST['user_id'];
    $query = "DELETE FROM users WHERE id = $user_id";
    if(mysqli_query($conn, $query)) {
        header("Location: manage_users.php");
        exit;
    } else {
        $error = "Failed to delete user";
    }
}

// Fetch users from database
$query = "SELECT id, username, email FROM users";
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Delete User</h1>
    <form method="post">
        <select name="user_id">
            <?php foreach($users as $user) { ?>
                <option value="<?php echo $user['id']; ?>"><?php echo $user['username'] . ' - ' . $user['email']; ?></option>
            <?php } ?>
        </select>
        <button type="submit" name="delete_user">Delete User</button>
    </form>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
</body>
</html>