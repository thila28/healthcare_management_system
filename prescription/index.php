<?php
session_start();
include 'functions.php';

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    // die("You must be logged in to set an appointment.");
	header("location: ../user/index.php"); // Redirect to the login page if not logged in
    exit();
}
$userId = $_SESSION['user_id'];

$pdo = pdo_connect_mysql();

// MySQL query that selects the images for the currently logged-in user
$stmt = $pdo->prepare('SELECT * FROM images WHERE user_id = ? ORDER BY uploaded_date DESC');
$stmt->execute([$userId]);
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Gallery')?>

<div class="content home">
	<h2>Prescriptions</h2>
	<p>You can see your uploaded prescriptions here</p>
	<a href="upload.php" class="upload-image">Upload Image</a>
	<div class="images">
		<?php foreach ($images as $image): ?>
		<?php if (file_exists($image['filepath'])): ?>
		<a href="#">
			<img src="<?=$image['filepath']?>" alt="<?=$image['description']?>" data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
			<span><?=$image['description']?></span>
		</a>
		<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>
<div class="image-popup"></div>
<script>
// Container we'll use to output the image
let image_popup = document.querySelector('.image-popup');
// Iterate the images and apply the onclick event to each individual image
document.querySelectorAll('.images a').forEach(img_link => {
	img_link.onclick = e => {
		e.preventDefault();
		let img_meta = img_link.querySelector('img');
		let img = new Image();
		img.onload = () => {
			// Create the pop-out image
			image_popup.innerHTML = `
				<div class="con">
					<h3>${img_meta.dataset.title}</h3>
					<p>${img_meta.alt}</p>
					<img src="${img.src}" width="${img.width}" height="${img.height}">
					<a href="delete.php?id=${img_meta.dataset.id}" class="trash" title="Delete Image"><i class="fas fa-trash fa-xs"></i></a>
				</div>
			`;
			image_popup.style.display = 'flex';
		};
		img.src = img_meta.src;
	};
});
// Hide the image popup container, but only if the user clicks outside the image
image_popup.onclick = e => {
	if (e.target.className == 'image-popup') {
		image_popup.style.display = "none";
	}
};
</script>
<?=template_footer()?>
