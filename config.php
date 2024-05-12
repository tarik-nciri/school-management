<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=schole management', 'root', '');
    $conn = $pdo;
} catch (PDOException $e) {
    echo "<p>Erreur: " . $e->getMessage();
    die();
}