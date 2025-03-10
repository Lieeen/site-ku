<?php
$servername = "localhost";
$dbname = "kalender";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
try {
    $sql = "CREATE DATABASE kalender";
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }
} catch(mysqli_sql_exception $e) {
    echo "kesalahan: " . $e->getMessage();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Event Kalender</title>
</head>
<body>
    <h1>Tambah Event ke Kalender</h1>
    <form method="post" action="">
        <label for="title">Judul Event:</label><br>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="event_date">Tanggal Event:</label><br>
        <input type="date" id="event_date" name="event_date" required><br><br>
        
        <label for="description">Deskripsi:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        
        <input type="submit" value="Tambah Event">
    </form>
</body>
</html>