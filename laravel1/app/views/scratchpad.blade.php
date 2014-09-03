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

class Person {
    public $first_name = '';
    public $last_name = '';
    public function set_first_name($name) {
        $this->first_name = $name;
    }
    public function set_last_name($name) {
        $this->last_name = $name;
    }
}

$ken = new Person;
$ken->set_first_name('ken');
$ken->set_last_name('koontz');
var_dump($ken);

class Vacation {
    public $city = '';
    public $state = '';
    public $view = '';
    public function __construct($city, $state, $view) {
        echo "I'm creating a class\n";
        $this->city = $city;
        $this->state = $state;
        $this->view = $view;
    }
}

$dream = new Vacation('Port Orford', 'Oregon', 'Touch of Heaven');
var_dump($dream);

?>
</html>