<?php
	$a=$_POST["fno"];
	$b=$_POST["sno"];
	$c=$a+$b;
	$d=$a-$b;
	$e=$a*$b;
	$f=$a/$b;
	$g=$a%$b;
	echo "Total is:".$c;
	echo "<br>Minus is:".$d;
	echo "<br>Multi is:".$e;
	echo "<br>Divide is:".$f;
	echo "<br>Moduler is:".$g;
?>