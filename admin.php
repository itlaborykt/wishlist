<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<title></title>
	<style>
		html, body{
			height: 100%;			
		}
		
	</style>
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171a21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase text-decoration-none">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase text-decoration-none">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase text-decoration-none">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase text-decoration-none">Поддержка</a>					
				</div>
			</div>
			
		</div>
	</div>

	<!--начало основного блока-->
	<div class="col-12" style="background-color: #1b2838; height: 100%;">
		<div class="col-6 mx-auto pt-5 text-center">
			<h1 class="text-white">Добавить товар</h1>
			
			<form action="insert.php" method="GET">
				<input class="form-control w-50 mt-3 mx-auto" name="img" placeholder="Картинка">
				<input class="form-control w-50 mt-3 mx-auto" name="names" placeholder="Название">
				<input class="form-control w-50 mt-3 mx-auto" name="price" placeholder="Цена">
				<button class="btn btn-success mt-3">Добавить игру</button>
			</form>
		</div>		
	</div><!--конец основного блока-->
</body>
</html>