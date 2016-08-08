<?php




$person = [
	'age' => 9000,
	'hair' => 'blue',
	'career' => 'astronaut'


];


$task = [
	'title' => 'laravel 5 essentials',
	'due' => '2017',
	'assigned_to' => 'Vincent',
	'completed' => '2018'


];



$person['name'] = "Vincent";
unset($person['age']);

echo '<pre>';

var_dump($person);

echo '</pre>';

echo "if dead, cannot see this";
require 'index.view.php';