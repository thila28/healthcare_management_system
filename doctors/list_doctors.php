<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id'])) {
    if ($_GET['action'] == 'delete') {
        $doctor_id = $_GET['id'];
        $query = "DELETE FROM doctors WHERE doctor_id = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $doctor_id);
        $stmt->execute();
        $stmt->close();
    }
}

$query = "SELECT * FROM doctors";
$result = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HTML for displaying the list of doctors -->
    <style>
        /* Reset some default styles for better consistency */
body, h1, table {
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

/* Style the table */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
}

/* Style the table headers */
th {
    background-color: #3498db;
    color: #fff;
    font-weight: bold;
    padding: 10px;
    text-align: left;
}

/* Style the table rows */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Style the table data cells */
td {
    padding: 10px;
}

/* Style the "Edit" and "Delete" links */
a {
    text-decoration: none;
    color: #3498db;
    padding: 5px;
    margin: 5px;
    border: 1px solid #3498db;
    border-radius: 4px;
    transition: background-color 0.3s;
}

a:hover {
    background-color: #3498db;
    color: #fff;
}



    </style>
</head>
<body>
    <h1>List of Doctors</h1>
    <table>
        <tr>
            <th>Doctor Name</th>
            <th>Age</th>
            <th>Specialization</th>
            <th>NIC</th>
            <th>Birth of Date</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['doctor_name']; ?></td>
                <td><?php echo $row['doctor_age']; ?></td>
                <td><?php echo $row['doctor_specialization']; ?></td>
                <td><?php echo $row['nic']; ?></td>
                <td><?php echo $row['birth_of_date']; ?></td>
                <td>
                    <a href="edit_doctor.php?id=<?php echo $row['doctor_id']; ?>">Edit</a>
                    <a href="list_doctors.php?action=delete&id=<?php echo $row['doctor_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
