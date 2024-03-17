<?php
$DATABASE_HOST = 'db';
$DATABASE_USER = 'chromerce';
$DATABASE_PASS = 'password';
$DATABASE_NAME = 'chromerce';

$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ($db === false) {
    die("FATAL ERROR: Could not connect to the database " . mysqli_connect_error());
}
?>
