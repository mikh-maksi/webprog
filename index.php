<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	
	<b>текст</b>
		<form action ="data.php?a=5&b=5" method = "post">
		<input name = "a">
		<input type = "submit" value = "send">
	</form>
	
	
	
	
	<?php
		
		echo "Hello, World!";
		
		$a = 1;
		$b = 2;
		$c = $a + $b;
		
		echo "<br>".$c."<br>";
		
		$a = 1;
		$a = $a + 2;
		echo $a;
		$a = "33";
		$c = $a+$b;
		
		echo "<br>".$c;
	?>
    
</body>
</html>


