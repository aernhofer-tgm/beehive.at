<?php
  session_start();

  $to = 'office@beehive.at';

  $subject = 'Beehive - Feedback';

  $headers = "From: " . strip_tags($_POST['absenderEmail']) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST['absenderEmail']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $message .= $_POST['nameAbsender'];
  $message .= "<br />";
  $message .= $_POST['nachricht'];

  $_SESSION['erfolgreich'] = mail($to, $subject, $message, $headers);

  header('Location: ../../../../../?page=feedback');
  exit;
?>
