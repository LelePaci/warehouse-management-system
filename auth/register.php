<?php
require_once '../commons/database/dbConnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = mysqli_real_escape_string($link, $_POST["firstName"]);
	$lastName = mysqli_real_escape_string($link, $_POST["lastName"]);
	$email = mysqli_real_escape_string($link, $_POST["email"]);
	$password = mysqli_real_escape_string($link, $_POST["password"]);
	$dateOfBirth = mysqli_real_escape_string($link, $_POST["dateOfBirth"]);
    $userLevel = 1;
	
	$hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = 'INSERT INTO users (FirstName, LastName, Email,  Password, DateOfBirth, UserLevel) VALUES (?, ?, ?, ?, ?, ?)';
    if ($stmt = mysqli_prepare($link, $sql)) {
		mysqli_stmt_bind_param($stmt, 'sssssi', $firstName, $lastName, $email, $hash, $dateOfBirth, $userLevel);
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location: ../main');
        } else {            
            echo 'Credenziali non valide';
		}
    }
}