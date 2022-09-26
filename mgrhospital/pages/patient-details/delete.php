<?php

/**
 * delete patient details
 */

$id = $_GET['id'];
include('conn.php');
mysqli_query($conn, "delete from `patient_details` where serial_num='$id'");
header('location:index.php');
