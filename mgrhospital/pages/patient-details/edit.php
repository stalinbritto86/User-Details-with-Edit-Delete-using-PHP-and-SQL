<?php

/**
 * edit patient details
 */

include('conn.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `patient_details` where serial_num='$id'");
$row = mysqli_fetch_array($query);

include 'header.php'; ?>

<div id="pd-edit">
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<h2>Edit Patient Details:</h2>
		<input placeholder="Patient ID" type="text" value="<?php echo $row['patient_id']; ?>" name="patient_id">
		<input placeholder="Patient Name" type="text" value="<?php echo $row['patient_name']; ?>" name="patient_name">
		<input placeholder="Phone Number" type="text" value="<?php echo $row['phone_number']; ?>" name="phone_number">
		<input placeholder="OP Date" type="text" value="<?php echo $row['op_date']; ?>" name="op_date">
		<input placeholder="Doctor Visited" type="text" value="<?php echo $row['doctor_visited']; ?>" name="doctor_visited">
		<input placeholder="Fees Charged" type="text" value="<?php echo $row['fees_charged']; ?>" name="fees_charged">
		<input type="submit" name="submit" value="Save Changes">
		<a href="index.php">Back</a>
	</form>
</div>

<?php include 'footer.php'; ?>