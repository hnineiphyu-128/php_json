<?php 

//one condition
	$x = 10;
	$y = 10;
	if ($x == $y) {
		echo "X and Y are Equal!!";
	}

//two condition
	date_default_timezone_set("Asia/Yangon");
	$t = date("H");
	if($t == 18){
		echo "Break Time!";
	}else{
		echo "Lecture Time!";
	}

//many ocndition
	echo "<br>";
	$d = date("D");
	if($d == "Mon"){
		echo "This day is Monday";
	}else if($d == "Tue"){
		echo "This day is Tuesday";
	}else if($d == "Wed"){
		echo "This day is Wednesday";
	}else if($d == "Thur"){
		echo "This day is Thursday";
	}else if($d == "Fri"){
		echo "This day is Friday";
	}else{
		echo "This day is Holiday";
	}

//switch condition
	$z = 3;
	echo "<br>";
	switch ($z) {
		case 1:
			echo "This is Case 1.";
			break;
		case 2:
			echo "This is Case 2.";
			break;
		case 3:
			echo "This is Case 3.";
			break;
		case 4:
			echo "This is Case 4.";
			break;
		
		default:
			echo "This Case is 0.";
			break;
	}
 ?>