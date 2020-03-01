<?php
	$fp = fopen("ACC/alexnet.csv", "r");
	while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
		$name= $data[0];
		$num = $data[1];
		echo "</br>".$name."：".$num."</br>";
	}
	$files = glob('AUC/*'); 
	foreach($files as $file) {
		echo "filename:".$file."<br />";
		echo "<img src=\"$file\"></br></br>";
	}
	$files = glob('ConfusionMatrix/*'); 
	foreach($files as $file) {
		echo "filename:".$file."<br />";
		echo "<img src=\"$file\"></br></br>";
	}
	$files = glob('erro/*'); 
	foreach($files as $file) {
		echo "filename:".$file."<br />";
		echo "<img src=\"$file\"></br></br>";
	}
?>
