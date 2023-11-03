<?php
// Include your database connection code
include('connection.php'); // You have provided the database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the form data
    $doctor_name = $_POST['doctor_name'];
    $doctor_age = $_POST['doctor_age'];
    $doctor_specialization = $_POST['doctor_specialization'];
    $nic = $_POST['nic'];
    $birth_of_date   = $_POST['birth_of_date'];

    // You should perform validation and sanitization of input data here.

    // Insert the doctor details into the database
    $query = "INSERT INTO doctors (doctor_name, doctor_age, doctor_specialization, nic, birth_of_date)
              VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssss", $doctor_name, $doctor_age, $doctor_specialization, $nic, $birth_of_date);

    if ($stmt->execute()) {
        // Doctor details successfully added
        echo "Doctor details added successfully!";
    } else {
        // Doctor details insertion failed
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Hotel Reservation Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form class="hotel-reservation-form" method="post" action="">
			<h1><i class="far fa-calendar-alt"></i>Add Doctors</h1>
			<div class="fields">
            <div class="wrapper">
	<div>
	</div>
	<div class="gap"></div>
	<div>
	</div>
	</div>
	<div class="wrapper">
	<div>
		<label for="first_name">Full Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="doctor_name" type="text" name="doctor_name" placeholder="Doctor Name" required>
		</div>
	</div>
	<div class="gap"></div>
	</div>

    <div class="wrapper">
	<div>
    <label for="children">Age</label>
		<div class="field">
			<select id="doctor_age"  name="doctor_age" placeholder="Doctor Age" required>
				<option disabled selected value="">--</option>
				<?php
            for ($age = 1; $age <= 120; $age++) {
                echo "<option value='$age'>$age</option>";
            }
            ?>
			</select>
		</div>
	</div>
	<div class="gap"></div>
	<div>
    <label for="adults">Specialization</label>
			<div class="field">
			<select id="doctor_specialization" name="doctor_specialization" required>
				<option disabled selected value="">--</option>
				<option value="Cardiology">Cardiology</option>
  <option value="Dermatology">Dermatology</option>
  <option value="Endocrinology">Endocrinology</option>
  <option value="Gastroenterology">Gastroenterology</option>
  <option value="Hematology">Hematology</option>
  <option value="Nephrology">Nephrology</option>
  <option value="Neurology">Neurology</option>
  <option value="Oncology">Oncology</option>
  <option value="Ophthalmology">Ophthalmology</option>
  <option value="Orthopedics">Orthopedics</option>
  <option value="Otolaryngology">Otolaryngology (ENT)</option>
  <option value="Pediatrics">Pediatrics</option>
  <option value="Psychiatry">Psychiatry</option>
  <option value="Pulmonology">Pulmonology</option>
  <option value="Rheumatology">Rheumatology</option>
  <option value="Urology">Urology</option>
  <option value="Allergy and Immunology">Allergy and Immunology</option>
  <option value="Anesthesiology">Anesthesiology</option>
  <option value="Emergency Medicine">Emergency Medicine</option>
  <option value="Family Medicine">Family Medicine</option>
  <option value="General Surgery">General Surgery</option>
  <option value="Internal Medicine">Internal Medicine</option>
  <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
  <option value="Plastic Surgery">Plastic Surgery</option>
  <option value="Radiology">Radiology</option>
  <option value="Cardiothoracic Surgery">Cardiothoracic Surgery</option>
  <option value="Critical Care Medicine">Critical Care Medicine</option>
  <option value="Infectious Disease">Infectious Disease</option>
  <option value="Neonatology">Neonatology</option>
  <option value="Pain Medicine">Pain Medicine</option>
  <option value="Physical Medicine and Rehabilitation">Physical Medicine and Rehabilitation</option>
  <option value="Sports Medicine">Sports Medicine</option>
  <option value="Geriatrics">Geriatrics</option>
  <option value="Nuclear Medicine">Nuclear Medicine</option>
  <option value="Vascular Surgery">Vascular Surgery</option>
  <option value="Gynecologic Oncology">Gynecologic Oncology</option>
  <option value="Hand Surgery">Hand Surgery</option>
  <option value="Interventional Radiology">Interventional Radiology</option>
  <option value="Medical Genetics">Medical Genetics</option>
  <option value="Neurosurgery">Neurosurgery</option>
  <option value="Oral and Maxillofacial Surgery">Oral and Maxillofacial Surgery</option>
  <option value="Pediatric Surgery">Pediatric Surgery</option>
  <option value="Sleep Medicine">Sleep Medicine</option>
  <option value="Transplant Surgery">Transplant Surgery</option>
  <option value="Colorectal Surgery">Colorectal Surgery</option>
  <option value="Neonatal-Perinatal Medicine">Neonatal-Perinatal Medicine</option>
  <option value="Reproductive Endocrinology and Infertility">Reproductive Endocrinology and Infertility</option>
  <option value="Forensic Pathology">Forensic Pathology</option>
  <option value="Aerospace Medicine">Aerospace Medicine</option>
  <option value="Pain Management">Pain Management</option>
			</select>
		</div>
	</div>
	</div>

    <div class="wrapper">
	<div>
    <label for="phone">NIC</label>
	<div class="field">
    <i class="fas fa-user"></i>
		<input id="nic" type="text" name="nic" placeholder="NIC" required>
	</div>
	</div>
	<div class="gap"></div>
	</div>
    <div class="wrapper">
	<div>
    <label for="phone">Phone</label>
	<div class="field">
		<i class="fas fa-phone"></i>
		<input id="birth_of_date" type="tel" name="birth_of_date" placeholder="Your Phone Number" required>
	</div>
	</div>
	<div class="gap"></div>
	</div>
	<div class="wrapper">
		<div>
	</div>
	<div class="gap"></div>
	<div>
		<!--  -->
	</div>
</div>
</div>
<input type="submit" value="Send Appoinment">
			</div>
			
		</form>
	</body>
</html>