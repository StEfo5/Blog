<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
</head>
<body>
	<div class="col-9 mx-auto pt-4">
		<div class="row">
			<div class="col-4 bg-white ml-4">
				<?php 
				$con = mysqli_connect('127.0.0.1', 'root', '','blog');
				$q = mysqli_query($con, "SELECT * FROM users");
				for ($i=0; $i < 5; $i++) { 
					# code...
					$result = $q->fetch_assoc();
					echo '<h6 class="mt-3 mb-1">'.$result['name'].'</h6>';
					echo '<p class="text-muted">'.$result['email'].', '.$result['phone'];
					echo '<br>';
					echo '<button class="btn btn-success text-white mt-2">
						Написать
					</button>';
					echo "<hr>";
				}
				 ?>
			</div>
			<div class="col-7 ml-3 bg-white">
				<form  action="pages.php" method="GET">
					<h6 class="mt-3">
						Заголовок:
					</h6>
					<input class="form-control"  name="zag">
						
					</input>
					<h6 class="mt-3">
						Текст поста:
					</h6>
					<textarea class="form-control" name="text" style="height: 144px">
						
					</textarea>
					<h6 class="mt-3">
						Автор:
					</h6>
					<input class="form-control" name="avtor">
						
					</input>
					<button class="btn btn-success text-white mt-4">
						Сохранить
					</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>