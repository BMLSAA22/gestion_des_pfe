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
		@csrf

		<form method="Post"
			action="upload" enctype="multipart/form-data">
			@csrf
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
