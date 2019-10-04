		
		<?php
		if (isset($_GET['a'])) $a = $_GET['a']; else $a = 0;
		if (isset($_GET['b'])) $b = $_GET['b']; else $b = 0;
		$c = $a + $b;
		echo $a."+".$b."=".$c;
