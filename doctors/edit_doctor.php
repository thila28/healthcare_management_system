<?php
include('connection.php');

$doctor = [];  // Define an empty array to prevent warnings

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $doctor_id = $_POST['doctor_id'];
    $doctor_name = $_POST['doctor_name'];
    $doctor_age = $_POST['doctor_age'];
    $doctor_specialization = $_POST['doctor_specialization'];
    $nic = $_POST['nic'];
    $birth_of_date = $_POST['birth_of_date'];

    $query = "UPDATE doctors SET doctor_name = ?, doctor_age = ?, doctor_specialization = ?, nic = ?, birth_of_date = ? WHERE doctor_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssssi", $doctor_name, $doctor_age, $doctor_specialization, $nic, $birth_of_date, $doctor_id);

    if ($stmt->execute()) {
        header("Location: list_doctors.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    if (isset($_GET['id'])) {
        $doctor_id = $_GET['id'];
        $query = "SELECT * FROM doctors WHERE doctor_id = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $doctor_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $doctor = $result->fetch_assoc();
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HTML for editing doctor details -->
    <style>
        /* Reset some default styles for better consistency */
body, h1, form {
    margin: 0;
    padding: 0;
}

/* Style the body */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    text-align: center;
}

/* Style the header */
h1 {
    background-color: #3498db;
    color: #fff;
    padding: 20px;
}

/* Style the form container */
form {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

/* Style form labels */
form label {
    display: block;
    margin-top: 10px;
    text-align: left;
    font-weight: bold;
}

/* Style form input fields */
form input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style the submit button */
form input[type="submit"] {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover {
    background-color: #258cd1;
}

    </style>
</head>
<body>
    <h1>Edit Doctor</h1>
    <form method="post">
        <input type="hidden" name="doctor_id" value="<?php echo isset($doctor['doctor_id']) ? $doctor['doctor_id'] : ''; ?>">
        <label for="doctor_name">Doctor Name</label>
        <input type="text" name="doctor_name" value="<?php echo isset($doctor['doctor_name']) ? $doctor['doctor_name'] : ''; ?>" required>
        <label for="doctor_age">Age</label>
        <input type="text" name="doctor_age" value="<?php echo isset($doctor['doctor_age']) ? $doctor['doctor_age'] : ''; ?>" required>
        <label for="doctor_specialization">Specialization</label>
        <input type="text" name="doctor_specialization" value="<?php echo isset($doctor['doctor_specialization']) ? $doctor['doctor_specialization'] : ''; ?>" required>
        <label for="nic">NIC</label>
        <input type="text" name="nic" value="<?php echo isset($doctor['nic']) ? $doctor['nic'] : ''; ?>" required>
        <label for="birth_of_date">Birth of Date</label>
        <input type="text" name="birth_of_date" value="<?php echo isset($doctor['birth_of_date']) ? $doctor['birth_of_date'] : ''; ?>" required>
        <input type="submit" value="Save Changes">
    </form>
</body>
</html>
