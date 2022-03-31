<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet"
		type="text/css"
		href="style.css" />
</head>

<body>
	
	<div id="content">
		<?php echo csrf_field(); ?>

		<form method="Post"
			action="upload" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<input type="file"
				name="file"
				value="" />

			<div>
				<button type="submit">
				UPLOAD
				</button>
			</div>
		</form>
	</div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\firstapp\resources\views/posts.blade.php ENDPATH**/ ?>