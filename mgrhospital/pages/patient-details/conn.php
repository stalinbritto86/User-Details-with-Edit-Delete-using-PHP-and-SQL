<?php

/**
 * database connection
 */

$conn = mysqli_connect("localhost","root","1234","mgrhospital");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
