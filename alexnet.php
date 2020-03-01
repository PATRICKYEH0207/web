<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>transfer Lreaning web php</title>
</head>

<body>
	<?php
		//-----CSV檔寫入-----//
		//
		//echo $answer."</br>";
	//SAVE num_csv
	$list_num = array
		(
			"$_POST[MiniBatchSize],$_POST[MaxEpochs],$_POST[InitialLearnRate],$_POST[ValidationData],$_POST[ValidationFrequency],$_POST[transfer],$_POST[Augmenter],$_POST[Time],$_POST[Verbose]",
		);
	$file = fopen("option_num.csv","w");
		foreach ($list_num as $line)
		  {
		  fputcsv($file,explode(',',$line));
		  }
	fclose($file);
	//save str_csv
	$list_str = array
		(
			"$_POST[solver],$_POST[Plots],$_POST[environment],$_POST[Shuffle]",
		);
	$file = fopen("option_str.csv","w");
		foreach ($list_str as $line)
		  {
		  fputcsv($file,explode(',',$line));
		  }
		fclose($file);
		echo "Running...</br>";
		echo '<pre>';
		// 输出 shell 命令 "ls" 的返回结果
		// 并且将输出的最后一样内容返回到 $last_line。
		// 将命令的返回值保存到 $retval。
		//$a = system('"C:\Program Files\Polyspace\R2019a\bin\matlab.exe" -nodisplay -nosplash -nodesktop -r "run(C:\xampp\htdocs\web\alexnet_web.m)"', $retval);
		$pwd = getcwd();
		$cmd='"C:\Program Files\Polyspace\R2019b\bin\matlab.exe" -nodisplay -nosplash -nodesktop -sd ' . $pwd . ' -r "alexnet_web;exit"';
		$a = system($cmd,$retval);
	?>
</body>
</html>