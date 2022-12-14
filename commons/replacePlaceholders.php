<?php
$placeholders_file = file_get_contents(__DIR__ . '/placeholders.json');
$json = json_decode($placeholders_file, true);

//WAREHOUSE NAME
define("WAREHOUSE_NAME", $json["warehouse_name"]);

//TITLES
$titles = $json["titles"];
define("INDEX_TITLE", $titles["index"]);
define("LOGIN_TITLE", $titles["login"]);
define("REGISTER_TITLE", $titles["register"]);
define("LOGOUT_TITLE", $titles["logout"]);

//CAROUSEL BACKGROUNDS
$indexBG = $json["carousel_background"];
$bgCount = count((array)$indexBG);
rand(1, $bgCount); 
define("CAROUSEL_BACKGROUND", $indexBG[array_rand($indexBG, 1)]);

//STATIC BACKGROUND
define("STATIC_BACKGROUND", $json["static_background"]);