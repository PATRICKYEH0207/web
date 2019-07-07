<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
// Database configuration
$dbHost     = "";
$dbUsername = "";
$dbPassword = "";
$dbName     = "";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
	else{
		echo"connect";
	}
?>
</body>
</html>
