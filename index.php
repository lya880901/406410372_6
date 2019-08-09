<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<form method="GET">
	<input type="text" name="person">
	<button>SUBMIT</button>
</form>
<?php
	echo 10+5;
	print "Karthas\n";
	$name = $_GET['person'];
	echo $name." is a handsome fellow";
	echo strlen("Hi Karthas");
	echo str_word_count("Hi Karthas");
	echo strrev("Hi Karthas"); 
	echo strpos("Hi Karthas","Hi");
	echo str_replace("Karthas","Mera","Hi Karthas");
	$x = 77;
	$y = 67;
	if($x==$y){
		echo "True!";
	}
	else{
		echo "False!";
	}
?>
</body>
</html>