<?php

/**
 * adding patient details
 */

include('conn.php');

$patient_id = $_POST['patient_id'];
$patient_name = $_POST['patient_name'];
$phone_number = $_POST['phone_number'];
$op_date = $_POST['op_date'];
$doctor_visited = $_POST['doctor_visited'];
$fees_charged = $_POST['fees_charged'];

mysqli_query($conn, "insert into `patient_details` (patient_id,patient_name,phone_number,op_date,doctor_visited,fees_charged) values ('$patient_id','$patient_name','$phone_number','$op_date','$doctor_visited','$fees_charged')");
header('location:index.php');
