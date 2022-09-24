<?php
require_once __DIR__ . '/../utils.php';
require_once __DIR__ . '/../user.php';

function fetchUser($link, $data)
{
    $email = mysqli_real_escape_string($link, $data['email']);
    $password = mysqli_real_escape_string($link, $data['password']);

    $sql = 'SELECT ID, FirstName, LastName, DateOfBirth, Gender, DateOfAddition, UserLevel FROM users WHERE Email = ?';
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $email);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                return new User($row);
            } else {
                debug_to_console("Dati non validi");
            }
        } else {
            debug_to_console("Errore durante l'esecuzione dello statement");
        }
    } else {
        debug_to_console("Errore durante la preparazione dello statement");
    }
}
