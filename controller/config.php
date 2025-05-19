<?php 

$host = 'localhost';
$db = 'dbinfosys';
$users = 'husto';
$pass = '0730';

$dsn = "mysql:host=$host;dbname=$db";

try {

    $conn = new PDO($dsn, $users, $pass);
    echo "Connected Successfully";
}
catch(PDOException $e){
    echo "Connection Failed : " . $e->getMessage();
}

?>