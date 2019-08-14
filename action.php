<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "NewDB";

$connection = new mysqli($server_name, $username, $password, $db_name);
if ($connection->connect_error){
    die("Connection failed" . $connection->connect_error);
}
echo "Connection successful";

$sql = "INSERT INTO users (name, email, pass, repeat_pass)
        VALUES ('shavo', 'shavo@mail.ru', '123456', '123456')";

if ($connection->query($sql) === TRUE){
    echo "Record created";
    echo "Record created";


}

$connection->close();