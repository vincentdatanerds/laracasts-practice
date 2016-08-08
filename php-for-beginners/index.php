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
	'completed' => true


];



$person['name'] = "Vincent";
unset($person['age']);


require 'index.view.php';