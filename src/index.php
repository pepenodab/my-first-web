<?php
$servername = 4408; 
$username = root; 
$password = yourpassword; 
$dbname = users; 

// Create connections
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successfully";
?>
<!DOCTYPE html>
<html langr="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <h1>Hola</h1>
</body>