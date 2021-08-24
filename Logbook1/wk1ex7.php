<html>
<body>
<?php
	//Declaring variables
	$hourlyrate	= 5.75;
	$hoursperweek = 40;

	//Calculating gross
	$gross = $hourlyrate * $hoursperweek;
  $taxrate = 0.22;

	//Calculating net
  $netwage = $gross * (1- $taxrate);

	//Outputing net
	echo $netwage;
?>
</body>
</html>
