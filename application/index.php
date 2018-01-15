<?php
try {
    $user = 'testuser';
    $pass = 'testpass';
    $dbh = new PDO('mysql:host=mysql;dbname=testdb', $user, $pass);
} catch (PDOException $e) {
    echo "Error on Connection: " . $e->getMessage();
    exit;
}
?>