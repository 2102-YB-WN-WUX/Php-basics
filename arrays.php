<h3>Arrays</h3>

<?php

$cars = array("Volvo", "BMW", "Mercedes");
print_r($cars);
echo "<br>The third car is " . $cars[2];

$people = array(
  "Joe" => "Blonde",
  "Mary" => "Brunette",
  "Heihatchi" => "Grey"
);
echo "<br>";
print_r($people);
echo "<br>
This person's hair color is..." . $people["Mary"];

?>
<h3 class="mt-5">Loop through array</h3>

<?php
foreach($people as $person){
  echo $person . "<br>";
}

foreach($people as $key => $haircolor){ ?>
<p><?php echo $key; ?>'s hair color is <?php echo $haircolor; ?><br></p>
<?php
}


$animals_list = array(
				"Lion" => "The king of the jungle",
				"Wolf" => "Loves to howl",
				"Dog" => "Man's best friend"
				);
foreach($animals_list as $key => $animal_description){ ?>

<b><?php echo $key ?></b> <?php echo $animal_description; ?> <br>

<?php
}
?>
<h3 class="mt-5">Regular Loop</h3>
<?php
for ($i=0; $i <10; $i++){
  $number = 10 * $i;
  echo "<br>The number is now " . $number;
}
?>
