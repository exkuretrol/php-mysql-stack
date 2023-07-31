<?php
$host = "db";
$user = "root";
$pass = "notSecureChangeMe";


try
{
    $conn = new PDO("mysql:host=$host", $user, $pass);
    echo "Connected successfully";
    $stmt = $conn->prepare("show variables;");
    $stmt->execute();
    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($stmt->fetchAll());
    echo "</pre>";
}
catch (PDOException $e)
{
    "Connection failed: " . $e->getMessage();
}


$conn = null;
