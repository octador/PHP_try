<?php
try {
    $dsn = 'mysql:host=localhost;dbname=pdo_test';
    $username = 'root';
    $password = '';
    $database = new PDO($dsn,$username,$password);
} catch (Exception $message) {
    echo 'il y a un problème'.$message;
}

?>