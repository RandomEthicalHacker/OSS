<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(15000, 22, 3000) . " tax";
	html_footer();
?>
