<?php 

	echo "<h1>Date</h1>";
	echo "Today is ".date("d-m-y");
	echo "<br>";
	echo "Today is ".date("D-M-Y");
	echo "<br>";
	echo "Today is ".date("M d, Y");
	echo "<br>";
	date_default_timezone_set("Asia/Yangon");
	echo "Time is ".date("h:i:sa");
	echo "<br>";
	echo "<h1>Strtotime</h1>";
	echo "Tomorrow is ".date("M d, Y", strtotime("tomorrow"));
	echo "<br>";
	echo "Next Saturday is ".date("M d, Y", strtotime("next saturday"));
	echo "<br>";
	echo "Next Two Week is ".date("M d, Y", strtotime("+2 weeks"));
	echo "<br>";
	echo "Next Three Month is ".date("M d, Y", strtotime("+3 months"));

	echo "<br>";
	$oneyear = date("M d, Y", strtotime(date("Y-m-d",mktime())."+365 day"));
	echo $oneyear;
 ?>