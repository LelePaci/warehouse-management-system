<?php
require_once 'commons/replacePlaceholders.php';
require_once 'commons/database/dbConnection.php';
require_once 'commons/database/dbManagement.php';
require_once 'commons/utils.php';
require_once 'commons/user.php';
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    header('location: auth/login.php');
}
$user = fetchUser($link, $_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo INDEX_TITLE; ?></title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body background="images/<?php echo STATIC_BACKGROUND; ?>">
    <div class="nav">
        <a href="#" id="name">
            <?php 
                if ($user->gender == 0){
                    echo 'Benvenuto ';
                } else {
                    echo 'Benvenuta ';
                }
            echo $user->firstName;
            ?>
        </a>
        <a href="auth/logout" class="auth"> Logout </a>
    </div>
</body>

</html>

<!-- <p><a href="pages/addEmployee">Aggiungi dipendente</a></p>
    <p><a href="auth/logout.php">Log out</a></p> -->