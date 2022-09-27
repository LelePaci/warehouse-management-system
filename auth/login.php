<?php
require_once '../commons/replacePlaceholders.php';
require_once '../commons/database/dbConnection.php';
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    header('location: ../main');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LOGIN_TITLE; ?></title>
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/login.css">    
    <script src="../js/validate.js"></script>
</head>

<body background="../images/<?php echo STATIC_BACKGROUND; ?>">
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
                <img src="../images/icons/show_password.png" alt="show/hide password" id="show-password">
            </fieldset>
            <input type="submit" value="Log in" class="btn btn-primary">
            <a href="../index" class="btn btn-secondary">Annulla</a>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['email']) && isset($_POST['password'])) {
                    $email = mysqli_real_escape_string($link, $_POST['email']);
                    $password  = mysqli_real_escape_string($link, $_POST['password']);

                    $sql = 'SELECT password FROM users WHERE email = ?';
                    if ($stmt = mysqli_prepare($link, $sql)) {
                        mysqli_stmt_bind_param($stmt, 's', $email);
                        if (mysqli_stmt_execute($stmt)) {
                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) == 1) {
                                $row = mysqli_fetch_array($result);
                                $psw = $row['password'];
                                if (password_verify($password, $psw)) {
                                    $_SESSION['email'] = $email;
                                    $_SESSION['password'] = $password;
                                    header('location: ../main');
                                } else {
                                    echo '<p class="error">ATTENZIONE: Credenziali errate </p>';
                                }
                            } else {
                                echo '<p class="error">ATTENZIONE: Credenziali errate </p>';
                            }
                        } else {
                            echo '<p class="error">Errore</p>';
                        }
                    } else {
                        echo '<p class="error">Errore</p>';
                    }
                } else {
                    echo '<p class="error">ATTENZIONE: Compila i campi prima di proseguire</p>';
                }
            }
            ?>
        </form>
    </div>
</body>

</html>