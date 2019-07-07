<?php include"upload_control.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Traansfer Learning index_control</title>
</head>

<body>
	<form action="upload_control.php" method="post" enctype="multipart/form-data">
		Select Control Image Files to Upload:
    	<input type="file" name="files[]" multiple >
    	<input type="submit" name="submit" value="UPLOAD">
	</form>
</body>
</html>