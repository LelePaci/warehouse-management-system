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

<body>
    <div class="nav">
        <a href="auth/login.php" id="login" class="auth"> LOGIN</a>
        <a href="auth/register.php" id="register" class="auth"> REGISTER</a>
    </div>
</body>

</html>