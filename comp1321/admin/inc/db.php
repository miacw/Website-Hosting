<?php 

try{
    $pdo = new PDO('mysql:host=localhost; dbname=db_comp1321', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}catch(PDOException $e){ //instantiates object from php exception class
    $error = 'Unable to connect to database server:'; //.$e->getMessage();
    include ("error.php");
    exit();
}
