<?php 

//for loop
	echo "<h2>For Loop</h2>";
	$a = 0;
	$b = 0;
	for ($i=0; $i <= 10 ; $i++) { 
		$a+=10;
		$b+=5;
	}
	echo "Value a is ".$a;
	echo "<br>";
	echo "Value b is ".$b;
	

//while loop
	echo "<br>";
	echo "<h2>While Loop</h2>";
	$num = 50;

	$j = 0;
	while ($j < 10) {
		$num--;
		$j++;
	}
	echo "Number Value is ".$num;
	echo "<br>";

//do while loop
	echo "<br>";
	echo "<h2>Do While Loop</h2>";
	$n =50;

	$k = 0;
	do{
		$n++;
		$k++;
	}while ($k < 10);
	echo "Value n is ".$n;
	echo "<br>";

//foreach loop
	echo "<br>";
	echo "<h2>Foreach Loop</h2>";
	$laptop = array("Mac","Acer","Dell","Asus","HP","Lenovo");

	foreach ($laptop as $key => $value) {
		echo "Key is ".$key."<br>";
		echo "Value is ".$value."<br>";
		echo "<br>";
	}
	
 ?>