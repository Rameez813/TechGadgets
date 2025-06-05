<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];
    $email   = $_POST['email'];
    $product = $_POST['product'];

    $sql = "INSERT INTO orders (name, phone, address, email, product)
            VALUES ('$name', '$phone', '$address', '$email', '$product')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your order! We will contact you soon.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>