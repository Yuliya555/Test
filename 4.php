<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <title>Задание 4</title>
	</head>
	<body>

	<?php

		$numberPairs = 0;

		for($i = 0; $i < 100; $i++) {
			$array[$i] = rand(-10, 10);
		}

		echo ($array[0] == $array[1]) ? '<font color="red">'.$array[0].' </font>' : $array[0];

		for($i = 1; $i < count($array); $i++) {
			if($array[$i] == $array[$i-1]) {
				$numberPairs++;
				echo ' <font color="red">'.$array[$i].'</font>';
			}
			else if($i+1 < count($array) && $array[$i] == $array[$i+1]) {
				echo ' <font color="red">'.$array[$i].'</font>';
			}
			else {
				echo ' '.$array[$i];
			}
		}

		echo '</br>Количество элементов массива: '.count($array);
		echo '</br>Количество пар: '.$numberPairs;
		
	?>

	</body>
</html>