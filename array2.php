<?php 

	// Array Sort
	$languages = ["Myanmar", "Japanese", "Chinese", "Thai", "India", "Korea"];
	// sort($languages); //=> sort
	rsort($languages); //Reverse sort
	foreach ($languages as $key => $value) {
		echo $value.",";
	}
	//Unset

	$programming = ["PHP","Perl","Python","Java"];

	echo "<br>";
	print_r($programming);
	unset($programming[2]);
	echo "<br>";
	print_r($programming);


	$prStr = implode("/", $programming);
	echo "<br>";
	echo $prStr;
	

	$prArr = explode("/", $prStr);
	echo "<br>";
	print_r($prArr);
	
 ?>	