3!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$database = [
				[
					"title"=>"Статья 1",
					"short_text"=>"lorem",
					"img"=>"img/1.jpg",
					"users"=>"user12",
				],
				[
					"title"=>"Статья 2",
					"short_text"=>"lorem",
					"img"=>"img/2.jpg",
					"users"=>"user30",
				],
				[
					"title"=>"Статья 3",
					"short_text"=>"lorem",
					"img"=>"img/3.jpg",
					"users"=>"user50",
				],
				[
					"title"=>"Статья 4",
					"short_text"=>"lorem",
					"img"=>"img/4.jpg",
					"users"=>"user90",
				],
				[
					"title"=>"Статья 5",
					"short_text"=>"lorem",
					"img"=>"img/5.jpg",
					"users"=>"user25",
				],
			];
		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class='text-center'>БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
			 		# code...
			 		echo "<h1 class='bg-success'>".$database[3]["title"]."</h1>";
					echo "<p>".$database[3]["short_text"]."</>";
					echo "<img class = 'w-100' src='".$database[3]["img"]."'";
					echo "<p>Автор: ".$database[3]["users"]."</p>";
					setlocale(LC_ALL ,"RUSSIAN");
					echo "<p>Дата публикации: ".strftime("%c")."</p>";
					echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
					echo "<hr>";

				
			 ?>
			 
		</div>
	</div>
</body>
</html>