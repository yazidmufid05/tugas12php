<?php
    $dbhost = "localhost";
    $dbname = "dbbarang";
    $dbuser = "root";
    $dbpass = "";

    $dsn = "mysql:host=$dbhost;dbname=$dbname";

    try {
        $dbh = new PDO($dsn, $dbuser, $dbpass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>
