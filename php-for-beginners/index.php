<?php



$animals = ['dog', 'cat'];

function dd($datasoup){
	echo '<pre>';

	var_dump($datasoup);
	echo '<pre>';
}


dd('hello world');


dd($animals);


dd(['wow', 'cool']);




function checkAgeForNightClub($age){
	if($age >= 21){
		echo "welcome in, you are old enough. 
		";
	} else {
		echo "go away, you are not old enough
		";
	}
}



checkAgeForNightClub(4);
checkAgeForNightClub(20);
checkAgeForNightClub(21);
checkAgeForNightClub(22);
checkAgeForNightClub(30);