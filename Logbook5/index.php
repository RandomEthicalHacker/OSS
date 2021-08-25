<?php include("class_lib.php"); ?>
<?php
	$josh = new person();
	$dan = new person;

	$josh->set_name("Joshua Smith");
	$dan->set_name("Daniel Hale");

	echo "Josh's full name: " . $josh->get_name();
  echo "<br/>";
	echo "Dan's full name: " . $dan->get_name();
?>
