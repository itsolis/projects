<html>
<head></head>
<body>	
<?php			
function numbers(){
    	$i = 0;
    	do {
    		echo ++$i . "<br>";
		} while ($i < 10);
}
numbers() ;

function moreNumbers(){
	for ($i=0; $i<=10; $i++) {
    echo "$i<br>";
	}
}
moreNumbers();


function myArray(){
	$shoes = array("High", "Heels", "Red Pumps", "Keds", "Socks");
	foreach ($shoes as $value) {
    	echo "$value<br>";
	}
}
myArray();

function car($make, $model, $year){
		$dreamcar = array(
			"make" => $make,
        	"model" => $model,
        	"year" => $year,
			);
		return $dreamcar;
}
var_dump(car("Audi", "S8", 2015));

$name = "Terry";
$day = 'Thursday';
if ($name == "Terry" && $day == 'thursday'){
	echo "Black Shoes";
}	elseif ($name == "Sebastian" || $day == 'Thursday'){
		echo "I got it right";
}	else {
		echo "Try again";
};

$six = "three";
$result = ($six == 7) ? " Way to go" : " This is a integer not a string";
	echo "$result";


?>
</html>