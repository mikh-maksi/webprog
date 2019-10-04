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
	<?php
		include "form.php";
	?>
	<form action ="" method = "post">
		<input name = "a">
		<input type = "submit" value = "send">
	</form>
	<?php
		
		if (isset($_POST['a'])) $aa = $_POST['a']; else $aa = 0;
		echo $aa;

	?>
    
</body>
</html>


