<?php



$dsn = "mysql:host=localhost;dbname=cinema";
$username = "root";
$password = "";

try {
    $pdo = new PDO( $dsn, username: $username, password: $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();  
}
?>


