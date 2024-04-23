<?php
session_start();
include('../db_config.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dosha'])) {
    $dosha = $_POST['dosha'];
    if ($dosha === 'vata') {
        header("Location: vata_recipes.php");
        exit;
    } elseif ($dosha === 'pitta') {
        header("Location: pitta_recipes.php");
        exit;
    } elseif ($dosha === 'kapha') {
        header("Location: kapha_recipes.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Repository</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
        }

        .dropbtn:hover, .dropbtn:focus {
            background-color: #3e8e41;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content button {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            background-color: #f9f9f9;
            border: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
        }

        .dropdown-content button:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <div class="container">
        <h2>Recipe Repository</h2>
        <div class="dropdown">
            <button class="dropbtn">Select Dosha <span>&#9660;</span></button>
            <div class="dropdown-content">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="dosha" value="vata">
                    <button type="submit">Vata</button>
                </form>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="dosha" value="pitta">
                    <button type="submit">Pitta</button>
                </form>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="dosha" value="kapha">
                    <button type="submit">Kapha</button>
                </form>
            </div>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>
