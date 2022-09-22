# Warehouse Management System
 Sistema per la gestione di un magazzino web.
 Backend realizzato in PHP e MySQL.
 Frontend realizzato con HTML, CSS e JavaScript

### Requisiti
 Prima di poter utilizzare questa webapp è necessario creare un database, ed aggiungere il file `dbConnection.php` per creare il collegamento con il database.
 
 #### Esempio
 ```
 <?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'paci_db_verifica_18052022');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false)
    die('ERROR: Could not connect. ' . mysqli_connect_error());
?>
 ```
