<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    echo "Non puoi disconnetterti prima di aver effettuato l'accesso";
} else {
    session_unset();
    header("location: ../index");
}
