<?php
define('DEV', true);
//define("DOC_ROOT", '/jlrenewables/public/');
//define("ROOT_FOLDER", 'public');

//Database settings
$type = 'mysql';
$server = 'localhost';
$db = 'htmx';
$port = 3306;
$charset = 'utf8mb4';
$username = 'htmx_user';
$password = 'htmx';
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";