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





	<ul>

		<li>
			<strong>Name: </strong>  <?= $task['title']; ?>
		</li>

		<li>
			<strong>Due Date: </strong>  <?= $task['due']; ?> 
		</li>

		<li>
			<strong>Person Responsible </strong>  <?= $task['assigned_to']; ?> 
		</li>

		<li>

			<strong>Status: </strong>
			<?php if($task['completed']){
				echo "Finished";
			} else {
				echo 'Not finished';
			}

			?>

		</li>
	</ul>



</body>



</html>