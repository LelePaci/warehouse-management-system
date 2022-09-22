<?php
$placeholders_file = file_get_contents(__DIR__ . '/placeholders.json');
$json = json_decode($placeholders_file, false);

$titles = $json->titles;
define("INDEX_TITLE", $titles->index);
define("LOGIN_TITLE", $titles->login);
define("REGISTER_TITLE", $titles->register);
define("LOGOUT_TITLE", $titles->logout);
