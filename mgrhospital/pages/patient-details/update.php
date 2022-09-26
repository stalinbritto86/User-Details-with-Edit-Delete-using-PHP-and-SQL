<?php

/**
 * updating patient details
 */

include('conn.php');
$id = $_GET['id'];

$patient_id = $_POST['patient_id'];
$patient_name = $_POST['patient_name'];
$phone_number = $_POST['phone_number'];
$op_date = $_POST['op_date'];
$doctor_visited = $_POST['doctor_visited'];
$fees_charged = $_POST['fees_charged'];

mysqli_query($conn, "update `patient_details` set patient_id='$patient_id', patient_name='$patient_name', phone_number='$phone_number', op_date='$op_date', doctor_visited='$doctor_visited', fees_charged='$fees_charged' where serial_num='$id'");
header('location:index.php');
