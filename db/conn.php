<?php

// $host = 'localhost';
// $db = 'attandance_db';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';

//remote db 
$host = 'sql6.freesqldatabase.com';
$db = 'sql6480804';
$user = 'sql6480804';
$pass = '8UyTAGntjK';
$charset = 'utf8mb4';

$dsn  = "mysql:host=$host;dbname=$db;charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass); 
    
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){

//throw new PDOException($e->getMessage());

echo '<h1 class ="text-danger" style= "color:teal">NO DataBase Found</h1>';
}

require_once'crud.php';
$crud = new crud($pdo);

?>