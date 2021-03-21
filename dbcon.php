<?php
ini_set('mysql.connect_timeout',300);
ini_set('default_socket_timeout',300);	  
$database="users";
$con=mysqli_connect("localhost","root","","$database");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>