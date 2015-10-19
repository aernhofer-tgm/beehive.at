<?php
$dir = "/wp-content/uploads/documents/";
$file = $dir.$_GET['document'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
else {
  //header('Location: 404.php');
  echo "Wieso funktioniert das nicht? Dar Pfad stimmt! <br />".$file;
  exit;
}
?>
