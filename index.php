<?php
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
}

$server = getenv('SERVER_HOST');
$user_db = getenv('USER_DB');
$pass_db = getenv('PASS_DB');
$schema_db = getenv('SCHEMA_DB');

$mysqli = new mysqli($server, $user_db, $pass_db, $schema_db);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
    echo "Successfully connected to MySQL! \n";
}
echo $mysqli->host_info . "\n";
?>