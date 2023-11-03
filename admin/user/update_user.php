<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'healthcare_management';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Check if the form is submitted
    if (isset($_POST['update'])) {
        // Retrieve updated data from the form
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

    // Retrieve the user's current information
    $user_query = "SELECT * FROM users WHERE id = $user_id";
    $user_result = mysqli_query($con, $user_query);
    $user_data = mysqli_fetch_assoc($user_result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
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

        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Update User</h1>
    <form method="POST">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <input type="text" name="new_username" placeholder="New Username" value="<?php echo $user_data['username']; ?>"><br>
        <input type="text" name="new_email" placeholder="New Email" value="<?php echo $user_data['email']; ?>"><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
<?php
// Close the database connection
mysqli_close($con);
?>
