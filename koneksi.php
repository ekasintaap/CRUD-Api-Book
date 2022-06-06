<?php
$dbserver = 'localhost';
$dbname = 'pweb2022';
$dbuser = 'root';
$dbpassword = '';
$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;

try{
    $connection = new PDO ($dsn, $dbuser, $dbpassword);

}catch(Exception $exception){
    die("terjadi error: {$exception->getMessage()}");
}
?>