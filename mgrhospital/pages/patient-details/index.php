<?php

/**
 * patient details index page
 */

include 'header.php'; ?>

<div id="pd-add-bt"><a href="#add-details" id="button"><span>Add Patient Details</span></a></div>

<div id="pd-table">
	<table>
		<thead>
			<th>Patient ID</th>
			<th>Patient Name</th>
			<th>Phone Number</th>
			<th>OP Date</th>
			<th>Doctor Visited</th>
			<th>Fees Charged</th>
			<th>Edit/Delete</th>
		</thead>
		<tbody>
			<?php
			include('conn.php');
			$query = mysqli_query($conn, "select * from `patient_details`");
			while ($row = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $row['patient_id']; ?></td>
					<td><?php echo $row['patient_name']; ?></td>
					<td><?php echo $row['phone_number']; ?></td>
					<td><?php echo $row['op_date']; ?></td>
					<td><?php echo $row['doctor_visited']; ?></td>
					<td><?php echo $row['fees_charged']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row['serial_num']; ?>"><i class="ri ri-pencil-line" title="Edit"></i></a>
						<a href="delete.php?id=<?php echo $row['serial_num']; ?>"><i class="ri ri-delete-bin-line" title="Delete"></i></a>
					</td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>

<div id="add-details"><a href="#" class="close"></a>
	<div id="target-inner">
		<div id="pd-form">
			<h2>Add Patient Details:</h2>
			<form method="POST" action="add.php">
				<input placeholder="Patient ID" type="text" name="patient_id">
				<input placeholder="Patient Name" type="text" name="patient_name">
				<input placeholder="Phone Number" type="text" name="phone_number">
				<input placeholder="OP Date" type="text" name="op_date">
				<input placeholder="Doctor Visited" type="text" name="doctor_visited">
				<input placeholder="Fees Charged" type="text" name="fees_charged">
				<input type="submit" name="add" value="Add Details">
			</form>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>