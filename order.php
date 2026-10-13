<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now - Flexe Click</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <nav class="navbar">
        <div class="logo">FLEXE <span>CLICK</span></div>

        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="order.php">Order Now</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <button class="menu-btn" onclick="toggleMenu()">☰</button>
    </nav>
</header>

<section class="page-header">
    <h1>Place an Order</h1>
    <p>Send us your printing requirements.</p>
</section>

<section class="form-section">

<form action="submit_order.php" method="POST">

    <label>Full Name</label>
    <input type="text" name="name" required>

    <label>Phone Number</label>
    <input type="tel" name="phone" required>

    <label>Email</label>
    <input type="email" name="email">

    <label>Select Service</label>

    <select name="service" required>
        <option value="">-- Select Service --</option>
        <option>Sticker Design & Printing</option>
        <option>Banner Design & Printing</option>
        <option>Document Printing</option>
        <option>Passport Photograph</option>
        <option>Graphic Design</option>
        <option>Other Printing Service</option>
    </select>

    <label>Order Details</label>

    <textarea name="details" rows="6" required></textarea>

    <button type="submit" class="btn">Submit Order</button>

</form>

</section>

<footer>
    <p>&copy; 2026 Flexe Click Printing Press.</p>
</footer>

<script src="js/script.js"></script>

</body>
</html>