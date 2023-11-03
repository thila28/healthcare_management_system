<?php
// Include your database connection code
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $doctor_id = $_GET['id'];

    // Delete the doctor record from the database
    $query = "DELETE FROM doctors WHERE id=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $doctor_id);

    if ($stmt->execute()) {
        // Doctor details successfully deleted
        header("Location: list_doctors.php"); // Redirect to the doctor list page
        exit;
    } else {
        // Doctor details deletion failed
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
