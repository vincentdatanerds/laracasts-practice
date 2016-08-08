<!DOCTYPE html>
<html lang = "en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		
		header {


			background: #e3e3e3;

			padding: 2em;

			text-align: center;

		}


	</style>

</head>


<body>

hello

	<header>
		<h1>


		<?php

		$greeting = "hey there, ";
		$name = $_GET['name'];

		echo $greeting . $name;
		?>

		</h1>

	</header>
</body>



</html>