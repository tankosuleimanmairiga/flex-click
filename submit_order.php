<?php

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $details = $_POST["details"];

    $sql = "INSERT INTO orders
            (name, phone, email, service, details)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "sssss",
        $name,
        $phone,
        $email,
        $service,
        $details
    );

    if ($stmt->execute()) {

        echo "
        <script>
            alert('Order submitted successfully!');
            window.location.href='order.php';
        </script>
        ";

    } else {

        echo "Error submitting order.";

    }

    $stmt->close();
    $conn->close();
}

?>