<html>
	<head>
		<title>Simple Interest</title>
	</head>
	<body>
	<form action="Simple.php" method="GET">
		Enter Amount:<input type="number" name="amt"><br>
		Enter Rate:<input type="number" name="rt"><br>
		Enter Year:<input type="number" name="yr"><br>
		<input type="submit" name="submit" value="submit">
	</form>
	</body>
</html>
<?php
	$p=$_GET["amt"];
	$r=$_GET["rt"];
	$n=$_GET["yr"];
	$si=$p*$r*$n/100;
	echo "Simple Interest is:".$si;
?>