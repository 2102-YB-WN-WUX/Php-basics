<h3>PHP Functions</h3>
<?php

function hello(){
  echo "Hello";
}

hello();

echo "<br>";

function add_numbers($x){
   echo $x + 2;
}

echo "<br>";
echo "<br>";

// add_numbers(1);

$first_number = 120;
$second_number = 13;

if ($first_number > $second_number){
  echo $first_number . " is greater than " . $second_number;
}else{
  echo $first_number . " is less than " . $second_number;
}

?>

<h3 class="mt-5">PHP Array within an array</h3>
<?php

$allClothes = array(
  '1' => array(
    'name' => 'T-Shirt',
    'description' => 'Plain white shirt',
    'price' => 3,
  ),
  '2' => array(
    'name' => 'Pants',
    'description' => 'Cargo pants',
    'price' => 31,
  ),
  '3' => array(
    'name' => 'Hat',
    'description' => 'Cool hat',
    'price' => 250,
  ),
  '4' => array(
    'name' => 'Suede Leather Pants',
    'description' => 'Gangsta looking pants',
    'price' => 1000,
  )
);

	foreach($allClothes as $clothing){

	echo '<h5>Name: ' . $clothing['name'] . "</h5><br>";
  echo '<p>Description: ' . $clothing['description'] ."</p><br>";
  echo '<p>Price: ' . $clothing['price'] ."</p><br>";
	}

?>
