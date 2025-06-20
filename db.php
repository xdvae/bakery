<?php
// Database connection
$host = 'localhost';
$db   = 'bakery';
$user = 'root';
$pass = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $item    = $_POST['item'] ?? '';
  $name    = $_POST['name'] ?? '';
  $phone   = $_POST['phone'] ?? '';
  $address = $_POST['address'] ?? '';

  if ($item && $name && $phone && $address) {
    $stmt = $pdo->prepare("INSERT INTO orders (item, name, phone, address) VALUES (?, ?, ?, ?)");
    $stmt->execute([$item, $name, $phone, $address]);

    // Redirect with success flag
    header("Location: index.php?success=1");
    exit;
  } else {
    echo "All fields are required.";
  }
} else {
  echo "Invalid request method.";
}
