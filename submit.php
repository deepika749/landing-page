<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $country = htmlspecialchars($_POST['country']);

  // Save to database or send email (example)
  $to = "admin@example.com";
  $subject = "New Lead from Study MBBS Abroad";
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nCountry: $country";
  $headers = "From: no-reply@example.com";

  if (mail($to, $subject, $message, $headers)) {
    echo "<script>alert('Form submitted successfully!'); window.location.href = 'index.html';</script>";
  } else {
    echo "<script>alert('Submission failed. Please try again.'); window.location.href = 'index.html';</script>";
  }
}
?>

