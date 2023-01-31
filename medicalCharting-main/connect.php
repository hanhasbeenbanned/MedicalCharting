<?php

	define('USER', 'root');
	define('PASSWORD', '');
	define('HOST', 'localhost');
	define('DATABASE', 'phplogin');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}