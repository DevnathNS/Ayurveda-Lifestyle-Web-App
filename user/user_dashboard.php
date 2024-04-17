<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if(isset($_POST['logout'])) {
    session_destroy();
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ayurveda Lifestyle Web App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dosha_quiz.php">Dosha Quiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipe_repository.php">Recipe Repository</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wellness_tracker.php">Wellness Tracker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="herbal_remedy_finder.php">Herbal Remedy Finder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mindfulness_resources.php">Mindfulness Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="community_forum.php">Community Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="educational_content.php">Educational Content</a>
                </li>
                <!-- Add more links to other user features as needed -->
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h1>Welcome to User Dashboard</h1>
        <!-- User dashboard content here -->
    </div>
</body>
</html>
