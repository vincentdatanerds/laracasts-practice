<?php




$person = [
	'age' => 9000,
	'hair' => 'blue',
	'career' => 'astronaut'


];

$person['name'] = "Vincent";


echo '<pre>';

die(var_dump($person));

echo '</pre>';

echo "if dead, cannot see this";
// require 'index.view.php';