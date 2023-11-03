<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'healthcare_management';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if (isset($_POST['update'])) {
    $user_id = $_POST['user_id'];
    $new_username = mysqli_real_escape_string($con, $_POST['new_username']);
    $new_email = mysqli_real_escape_string($con, $_POST['new_email']);

    // Write an SQL query to update the user's information
    $sql = "UPDATE users SET username='$new_username', email='$new_email' WHERE id=$user_id";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        echo "User information updated successfully.";
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
}

// Write a SQL query to retrieve user details
$sql = "SELECT * FROM users";

// Execute the query
$result = mysqli_query($con, $sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>User Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Registration Date</th>
            <th>Form Access</th>
            <th>Update</th>
        </tr>

        <?php
        // Loop through the results and display user details
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['registration_date'] . "</td>";
            echo "<td>" . $row['form_access'] . "</td>";
            echo "<td><a href='update_user.php?id=" . $row['id'] . "'>Update</a></td>";
            echo "</tr>";
        }

        // Close the result set
        mysqli_free_result($result);
        ?>
    </table>
</body>
</html>
<?php
// Close the database connection
mysqli_close($con);
?>
