<?php 
	
	$name = "Xiao Zhan";

	//echo $name \/
	echo "My Idol Name is " .$name.'<br>';
	echo "$name"; //"" ထဲတွင် variable ကို ဖတ်ပေးသွား
	echo '$name';//'' ထဲတွင် variable ကို Srting အဖြစ်နဲ့ ဖတ်ပေးသွား
	echo "<br>";
	$firstName = "Wang";
	$lastName = "Yibo";

	// $firstName .= $lastName;
	// echo $firstName;
	//otherwise
	echo $firstName." ".$lastName;

	// trim(str)=> String ရဲ့ start နဲ့ end က space တွေကို ဖျက်ပေး
	echo "<br>";
	$str = " Hello Wang Yibo! ";
	echo trim($str);

	// strlen(string) => Length of String
	$str1 = "Hello Xiao Zhan and Wang Yibo";
	echo "<br>";
	echo $str1.", String Length is ";
	echo strlen($str1);

	// strcasecmp(str1, str2) => Compare 2 String
	//0 => 2 String are equal
	//>0 => str1 greater than str2
	//<0 => str1 less than str2
	echo "<br>";
	$str2 = strcasecmp("Hello", "Hello GeGe!");
	echo $str2;

	// strtolower(str)=> Change String to Lowercase
	echo "<br>";
	echo strtolower("HELLO");
	// strtoupper(str)=> Change String to Uppercase
	echo "<br>";
	echo strtoupper("hello");

	// substr(string, start) =>String ကို ဖြတ်
	echo "<br>";
	echo substr("Hello XiaoZhan!", 6); 
	echo "<br>";
	echo substr("Hello XiaoZhan!", -5); 

	// str_replace(search, replace, subject)=> replace String
	echo "<br>";
	echo str_replace("Wang Yi Bo", "Lan Zhan", "Hello Wang Yi Bo!");

	
 ?>