<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate the form data
  $errors = array();
  if (empty($name)) {
    $errors[] = 'Please enter your name.';
  }
  if (empty($email)) {
    $errors[] = 'Please enter your email address.';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
  }
  if (empty($message)) {
    $errors[] = 'Please enter a message.';
  }

  // Send the email
  if (empty($errors)) {
    $to = 'rafshiodin@gmail.com'; // Replace with your email address
    $subject = 'Portfolio Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
      echo '<p class="success">Your message has been sent. Thank you!</p>';
    } else {
      echo '<p class="error">There was a problem sending your message. Please try again.</p>';
    }
  } else {
    echo '<ul class="errors">';
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo '</ul>';
  }
}
?>
