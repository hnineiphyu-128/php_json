<?php 

	// Index Array	
	$laptop = array("Mac","Acer","Dell","Asus","HP","Lenovo");
	// print_r($laptop); //=> to output for array
	// echo $laptop[0]; //=> Output string
	foreach ($laptop as $key => $value) {
		echo "Laptop Brand is ".$value."<br>";
		echo "<br>";
	}
	//otherwise Version 7 released
	$fruits =[];
	$fruits[0] = "Apple";
	$fruits[1] = "Orange";
	$fruits[2] = "Mango";
	
	print_r($fruits); //=> to output for array

	//Associative Array
	echo "<br>";
	$prices = array(
		"Apple" => 250,
		"Orange" => 200,
		"Mango" => 300
		
	);

	print_r($prices);

	//Multidimensional Array || Nested Array
	echo "<br><br>";
	$foods = [
		'breakfast' => ["Mohingar", "Yum Yum", "Fried Rice", "Nan Gyi Thonke", "Kaung Nyin Paung"],
		'lunch' => ["Rice and Burmese Curry","Shan-Style Rice"],
		'dinner' => ["Lahpet Thonke","Chapatis and Curry"]
	];

	var_dump($foods); //=> to output for array
	echo "<br><br>";
	var_dump($foods['breakfast']); //=> to output for array
	echo "<br><br>";
	var_dump($foods['breakfast'][0]); //=> to output for array
	
 ?>