<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact - Flexe Click</title>
  <style>
    *{margin:0; padding:0; box-sizing:border-box; font-family:Arial, sans-serif;}
    body{background:#f5f5f5;}
    
    /* Navbar - matches your other pages */
    nav{background:#1a1a1a; padding:15px 50px; display:flex; justify-content:space-between; align-items:center;}
    nav .logo{font-size:22px; font-weight:bold; color:#fff;}
    nav .logo span{color:#FF8C00;}
    nav ul{list-style:none; display:flex; gap:25px;}
    nav ul li a{color:#fff; text-decoration:none; font-weight:500;}
    nav ul li a:hover{color:#FF8C00;}
    
    /* Contact Section */
    #contact { padding: 60px 20px; color: #333; }
    .contact-container { max-width: 1100px; margin: auto; text-align: center; }
    .contact-container h2 { font-size: 32px; margin-bottom: 10px; }
    .contact-wrapper { 
      display: flex; gap: 40px; flex-wrap: wrap; margin-top: 30px; text-align: left;
    }
    .contact-details, .contact-form { 
      flex: 1; min-width: 300px; background: #fff; padding: 25px; border-radius: 10px; 
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .contact-details h3, .contact-form h3 { margin-bottom: 15px; color: #FF8C00; }
    .contact-details a { color: #222; text-decoration: none; }
    .contact-form input, .contact-form textarea {
      width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 15px;
    }
    .contact-form button {
      background: #FF8C00; color: #fff; padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;
    }
    .contact-form button:hover { background: #e67e00; }
    
    footer{background:#1a1a1a; color:#fff; text-align:center; padding:20px; margin-top:40px;}
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="logo">FLEXE <span>CLICK</span></div>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="order.php">Order Now</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>

<!-- CONTACT SECTION -->
<section id="contact">
  <div class="contact-container">
    <h2>Contact Flexe Click Printing Press</h2>
    <p>We’d love to hear from you. Send us a message or visit us.</p>

    <div class="contact-wrapper">
      <!-- Contact Info -->
      <div class="contact-details">
        <h3>Get In Touch</h3>
        <p><b>Address:</b> Low-Cost, Keffi, Beside Keystone Bank, Nasarawa State</p>
        <p><b>Phone:</b> <a href="tel:+234XXXXXXXXXX">+234 XXXX</a></p>
        <p><b>Email:</b> <a href="mailto:info@flexeclick.com">info@flexeclick.com</a></p>
        <p><b>Hours:</b> Mon - Sat: 8am - 6pm</p>
      </div>

      <!-- Contact Form -->
      <form class="contact-form" action="contact_process.php" method="POST">
        <h3>Send Us A Message</h3>
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <p>© 2026 Flexe Click Printing Press. All Rights Reserved.</p>
</footer>

</body>
</html>