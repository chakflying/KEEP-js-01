<?php

DEFINE ('DB_USER', 'web');
DEFINE ('DB_PWD', 'TEST');
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'c9');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME)
OR die('Could not connect to MySQL'.mysqli_connect_error());
?>