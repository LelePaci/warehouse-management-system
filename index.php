<?php
require_once 'utils/replacePlaceholders.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo INDEX_TITLE; ?></title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body background="images/<?php echo INDEX_BACKGROUND; ?>">
    <div class="nav">
        <a href="#" id="name"> <?php echo WAREHOUSE_NAME; ?> </a>
        <!-- <div id="auth-box"> -->
            <a href="auth/login.php" id="login" class="auth"> Login </a>
            <!-- <a href="auth/register.php" id="register" class="auth"> REGISTER</a> -->
        <!-- </div> -->

    </div>
</body>

</html>