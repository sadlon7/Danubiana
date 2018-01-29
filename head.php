<?php
  function includeHead($title){ //function parameters, two variables.

  	$a = "
  	<!DOCTYPE html>
  	<html>
  	<head>
  	<meta charset='utf-8'>
  	<meta http-equiv='x-ua-compatible' content='ie=edge'>
  	<title>";

  	$b = "</title>

  	<meta name='description' content=''>
  	<meta name='viewport' content='width=device-width, initial-scale=1'>

  	<link rel='icon' type='image/png' href='\assets\images\logos\danubianaColorLogo.png'/>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='assets/styles/style.css'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

	</head>";

	echo $a, $title, $b;
}
?>


