<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Age Checker</title>
</head>
<body>

<h2>Check Eligibility</h2>

<form method="POST">
    <label>Enter your age:</label><br><br>
    <input type="number" name="age" required><br><br>
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];

    if ($age >= 18) {
        echo "<h3>You are Eligible ✅</h3>";
    } else {
        echo "<h3>You are Not Eligible ❌</h3>";
    }
}
?>

</body>
</html>