<?php 

	function myFun(){
		echo "My Idol is DayToy";
	}

	myFun();
	$idol = "Xiao Zhan";
	$position = "Wei Wu Xian";
	function name($val1,$val2){
		echo "Name is ".$val1."<br> Position in The Untamed is ".$val2;
	}
	echo "<br>";
	name($idol,$position);
	echo "<br>";

	$age = 29;
	function myAge($val=22){
		echo "His Age is ".$val;
	}

	myAge($age);
	echo "<br>";
	myAge();
 ?>