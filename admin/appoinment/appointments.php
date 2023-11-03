<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'healthcare_management';

// Create a database connection
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Select data from both tables using a JOIN
$query = "SELECT appointments.*, users.username, users.email AS user_email
          FROM appointments
          JOIN users ON appointments.user_id = users.id";

$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Style for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style for the page header */
        h1 {
            font-size: 24px;
            color: #333;
        }

        /* Center the table on the page */
        .container {
            text-align: center;
        }

        /* Add some spacing below the table */
        table + p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Appointments</h1>
    <?php
    if ($result) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Arrival</th><th>Departure</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Gender</th><th>Age</th><th>Doctor</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['user_email'] . "</td>";
            echo "<td>" . $row['arrival'] . "</td>";
            echo "<td>" . $row['departure'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['doctor'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    ?>
</div>
</body>
</html>

<?php
// Close the database connection
mysqli_close($con);
?>
