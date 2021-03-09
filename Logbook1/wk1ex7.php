<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
  $taxrate = 0.22;
  $netwage = $gross * (1- $taxrate);
	echo $netwage;
?>
</body>
</html>
