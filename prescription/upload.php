<?php
session_start();
include 'functions.php';

$msg = '';

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header('Location: ../user/index.php');
    exit();
}

$userId = $_SESSION['user_id'];

$pdo = pdo_connect_mysql();

if (isset($_POST['submit'])) {
    $target_dir = 'images/';
    $image_path = $target_dir . basename($_FILES['image']['name']);

    // Check if the image is valid
    if (!empty($_FILES['image']['tmp_name']) && getimagesize($_FILES['image']['tmp_name'])) {
        // Check if the file already exists
        if (file_exists($image_path)) {
            $msg = 'Image already exists, please choose another or rename the image.';
        } else if ($_FILES['image']['size'] > 500000) {
            $msg = 'Image file size is too large, please choose an image less than 500kb.';
        } else {
            // Move the uploaded image to the target directory
            move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

            // Insert image info into the database along with the user ID
            $stmt = $pdo->prepare('INSERT INTO images (user_id, title, description, filepath, uploaded_date) VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP)');
            $stmt->execute([$userId, $_POST['title'], $_POST['description'], $image_path]);

            $msg = 'Image uploaded successfully!';
        }
    } else {
        $msg = 'Please upload a valid image!';
    }
}
?>
<?=template_header('Upload Image')?>

<div class="content upload">
    <h2>Upload Image</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Choose Image</label>
        <input type="file" name="image" accept="image/*" id="image">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <p><?=$msg?></p>
</div>

<?=template_footer()?>
