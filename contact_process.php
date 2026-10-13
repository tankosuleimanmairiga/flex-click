<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "info@flexeclick.com"; // change to your real email
  $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";
  $headers = "From: $email";

  if(mail($to, $subject, $body, $headers)){
    echo "<script>alert('Message sent successfully!'); window.location='contact.php';</script>";
  } else {
    echo "<script>alert('Failed to send message.'); window.location='contact.php';</script>";
  }
}
?>