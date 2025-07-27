<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "your-email@example.com";
  $subject = "New Contact Form Submission";
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  mail($to, $subject, $body);
  echo "Message sent successfully!";
}
?>
