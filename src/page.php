<?php get_header(); ?>
<?php
	$file = $_GET["page"];
	if($file==null)
	$file = "startseite";
	$path =__DIR__."/pages/".$file.".php";
  if(file_exists($path)){
    include($path);
  }
  else{
    header('Location: 404.php');
    exit;
  }
?>
<?php get_footer(); ?>
