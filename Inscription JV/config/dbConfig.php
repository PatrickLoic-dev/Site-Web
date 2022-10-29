<?php

    define('HOST', "localhost");
    define('DB_NAME', "inscription");
    define('USER', "root");
    define('PASSWORD', "root");

    try {
        $conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $err) {
        die($err->getMessage());
    }
?>