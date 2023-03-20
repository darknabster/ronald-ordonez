<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "ronaldordonez06@gmail.com";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $body = "<p><strong>Name:</strong> $name</p>";
  $body .= "<p><strong>Email:</strong> $email</p>";
  $body .= "<p><strong>Subject:</strong> $subject</p>";
  $body .= "<p><strong>Message:</strong></p>";
  $body .= "<p>$message</p>";

  mail($to, $subject, $body, $headers);

  echo "Thank you for contacting us. We will get back to you shortly.";
}
?>







