<?php
  session_start();
  
  $to = 'jakub.adam.kopec@gmail.com';

  $subject = 'Beehive - Feedback';

  $headers = "From: " . strip_tags($_POST['absenderEmail']) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST['absenderEmail']) . "\r\n";
  $headers .= "BCC: jakub.adam.kopec@gmail.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $message .= $_POST['nameAbsender'];
  $message .= "<br />";
  $message .= $_POST['nachricht'];

  // echo $subject;
  // echo "<br>";
  // echo $to;
  // echo "<br>";
  // echo $message;
  // echo "<br>";
  // echo $headers;
  // echo "<br>";

  $_SESSION['erfolgreich'] = mail($to, $subject, $message, $headers);

  header('Location: ../../../../../?page=feedback');

?>
