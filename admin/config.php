<?php

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'nefertit_nefertiti');

/* Attempt to connect to MySQL database */
// 'localhost', 'root', '', 'nefertiti'
$link = mysqli_connect('localhost', 'root', '', 'nefertiti');

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
