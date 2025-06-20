<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = $_POST['item'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("INSERT INTO orders (item, name, phone, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $item, $name, $phone, $address);

    if ($stmt->execute()) {
        echo "Order received! Thank you, $name.";
    } else {
        echo "Something went wrong.";
    }

    $stmt->close();
    $conn->close();
}
?>
