<?php
// Include your database connection code
include('connection.php'); // You have provided the database connection code

// Check if the user is logged in and has access to create appointments
session_start();

if (!isset($_SESSION['user_id'])) {
    // die("You must be logged in to set an appointment.");
	header("location: ../user/index.php"); // Redirect to the login page if not logged in
    exit();
}

// Get user ID from the session
$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the form data
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['adults']; // Assuming 'adults' corresponds to gender
    $age = $_POST['children'];   // Assuming 'children' corresponds to age
    $doctor = $_POST['room_pref']; // Assuming 'room_pref' corresponds to doctor selection

    // You should perform validation and sanitization of input data here.

    // Insert the appointment into the database
    $query = "INSERT INTO appointments (user_id, arrival, departure, first_name, last_name, email, phone, gender, age, doctor)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssssssss", $user_id, $arrival, $departure, $first_name, $last_name, $email, $phone, $gender, $age, $doctor);

    if ($stmt->execute()) {
        // Appointment successfully added
        echo "Appointment set successfully!";
    } else {
        // Appointment insertion failed
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
			<h1><i class="far fa-calendar-alt"></i>Set Appointment for Doctor</h1>
			<div class="fields">
            <div class="wrapper">
	<div>
		<label for="arrival">Today</label>
		<div class="field">
			<input id="arrival" type="date" name="arrival" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="departure">Appoinment Date</label>
		<div class="field">
			<input id="departure" type="date" name="departure" required>
		</div>
	</div>
	</div>
	<div class="wrapper">
	<div>
		<label for="first_name">First Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="first_name" type="text" name="first_name" placeholder="First Name" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="last_name">Last Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
		</div>
	</div>
	</div>
	<label for="email">Email</label>
	<div class="field">
		<i class="fas fa-envelope"></i>
		<input id="email" type="email" name="email" placeholder="Your Email" required value="<?php echo $email; ?>">
	</div>
	<label for="phone">Phone</label>
	<div class="field">
		<i class="fas fa-phone"></i>
		<input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
	</div>
	<div class="wrapper">
		<div>
			<label for="adults">Gender</label>
			<div class="field">
			<select id="adults" name="adults" required>
				<option disabled selected value="">--</option>
				<option value="1">Male</option>
				<option value="2">Female</option>
			</select>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="children">Age</label>
		<div class="field">
			<select id="children" name="children" required>
				<option disabled selected value="">--</option>
				<?php
            for ($age = 1; $age <= 120; $age++) {
                echo "<option value='$age'>$age</option>";
            }
            ?>
			</select>
		</div>
	</div>
</div>
<!-- <label for="room_pref">Doctor</label>
<div class="field">
	<select id="room_pref" name="room_pref" required>
		<option disabled selected value="">--</option>
		<option value="Standard">Standard</option>
		<option value="Deluxe">Deluxe</option>
		<option value="Suite">Suite</option>
	</select>
</div> -->
<label for="doctor_pref">Doctor</label>
<div class="field">
    <select id="doctor_pref" name="doctor_pref" required>
        <option disabled selected value="">-- Select Doctor --</option>
        <?php
        include('connection.php'); // Include your database connection code

        $query = "SELECT doctor_id, doctor_name, doctor_specialization FROM doctors";
        $result = $con->query($query);

        while ($row = $result->fetch_assoc()) {
            $doctorId = $row['doctor_id'];
            $doctorName = $row['doctor_name'];
            $specialization = $row['doctor_specialization'];
            echo "<option value='$doctorId'>$doctorName - $specialization</option>";
        }
        ?>
    </select>
</div>

<input type="submit" value="Send Appoinment">
			</div>
			
		</form>
	</body>
</html>

