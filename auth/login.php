<?php
require_once '../utils/replacePlaceholders.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LOGIN_TITLE; ?></title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <script src="../js/validate.js"></script>
</head>

<body background="../images/<?php echo LOGIN_BACKGROUND; ?>">
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Accedi</h1>
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" placeholder="Inserisci la tua email" autofocus required>
            </fieldset>
            <fieldset>
                <legend>Password</legend>
                <input type="password" name="password" id="password" placeholder="Inserisci la tua password" required>
                <img src="../images/show_password.png"  alt="show/hide password" id="show-password">
            </fieldset>
            <input type="submit" value="Log in" class="btn btn-primary">
            <a href="../index.php" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
</body>

</html>