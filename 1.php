<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <title>Задание 1</title>
	</head>
	<body>

	<?php

	$a = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque minima, nam officiis voluptatibus officia. Cumque corporis, ratione. Dignissimos veniam sint accusamus saepe sapiente possimus animi, provident, dolorum velit illum iure. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima non molestias expedita quasi veritatis tempore accusantium omnis sint soluta, nemo veniam quo, magni odit quaerat itaque unde consectetur quod corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus dolores eius quaerat quod, laudantium quisquam cum reiciendis fugit eaque provident, nemo quam, harum. Enim nemo provident numquam cum debitis deserunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolor sequi ut repudiandae maiores est inventore sapiente non quisquam, quae aspernatur tenetur incidunt esse ea nostrum, nesciunt facere eveniet distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, nemo! Molestias asperiores, atque iste! Adipisci labore eligendi magnam repellat quia, rerum veniam fugiat quibusdam itaque hic illo pariatur, eum quam?";

	$link = "/link.html";

	if(iconv_strlen($a) > 180) {
		$b = cropText(180, $a, $link);
	}
	else {
		$b = $a;
	}

	echo $b;

	function cropText($maxLength, $text, $link) {  
	    $cropString = substr($text, 0, strripos(substr($text, 0, $maxLength), ' '));
		$array = explode(" ", $cropString);
		$lastTwoWords = implode( " ", array_slice($array, count($array)-2, 2));
		$lenghtLastTwoWords = iconv_strlen($lastTwoWords);

		return substr($cropString, 0, -$lenghtLastTwoWords).'<a href='.$link.'>'.$lastTwoWords.'...</a>';		
	}  
	?>

	</body>
</html>