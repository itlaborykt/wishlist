<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<title></title>
	<style>
		html, body{
			height: 100%;			
		}
		.cart-price {
			height: 38px;
			width: 210px;
			background: #323e4c;	
			color: white;					
		}
		.btn-color {
			background: #62971d;
			color: white;
			border: none;
			border-radius: 5px;				
		}
		.form-color {
			background: #1b2838; 
			border: 1px solid black ; 
			box-shadow: 0.1em 0.1em 0.1em rgba(61,77,93,255)
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
					<a href="admin.php" class="text-light ms-4 text-uppercase text-decoration-none">Админ панель</a>					
				</div>
			</div>
			
		</div>
	</div>

	<!--начало основного блока-->
	<div class="col-12" style="background-color: #1b2838; height: 100%;">
		<div class="col-6 mx-auto pt-5">
			<!--заголовок и ава-->
			<div class="d-flex">
				<div class="col-1">
					<img src="img/logo.jpeg" class="w-100">
				</div>
				<div class="col-11">
					<h3 class="text-uppercase text-light fw-normal mt-4 ms-3">СПИСОК ЖЕЛАЕМОГО ИМЯ ПОЛЬЗОВАТЕЛЯ</h3>
				</div>
			</div>
			<!--инпут и кнопки-->
			<div class="mt-3 d-flex p-2 justify-content-between">
				<input class="form-control w-50 fst-italic form-color" placeholder="Поиск по названию или метке">
				<button class="btn dropdown-toggle text-light" style="background:#3d434f">Настройки</button>
				<button class="btn dropdown-toggle text-light" style="background:#3d434f"><span class="text-primary">Сортировать по:</span> вашему предпочтению</button>
			</div>
			<hr style="border-top: 1px solid grey;">
			<!--первая карточка-->
			<div class="d-flex" style="background: #3d4d5d;	">
				<div class="d-flex align-items-center px-2">
					<img src="img/handle.png">
				</div>
				<div class="col-11 d-flex p-3" style="border-left: 1px solid;">
					<div class="col-4">
						<img src="img/1.jpg" class="w-100">
					</div>

					<div class="col-5">
						<p class="text-light fw-normal fs-4 ms-3">Ash of Gods: Redemption</p>					
					</div>
					<div class="col-3 d-flex align-items-center">
						<div class="cart-price mx-auto d-flex align-items-center justify-content-center">
							<p class="ms-2 pt-3">
								510,1 руб 
							</p>
							<button class="btn-color px-3 py-1 ms-4">В корзину</button>
						</div>
					</div>
				</div>
			</div>
			<!--вторая карточка-->
			<div class="d-flex mt-2" style="background: #3d4d5d;	">
				<div class="d-flex align-items-center px-2">
					<img src="img/handle.png">
				</div>
				<div class="col-11 d-flex p-3" style="border-left: 1px solid;">
					<div class="col-4">
						<img src="img/2.jpg" class="w-100">
					</div>

					<div class="col-5">
						<p class="text-light fw-normal fs-4 ms-3">Mundaun</p>					
					</div>
					<div class="col-3 d-flex align-items-center">
						<div class="cart-price mx-auto d-flex align-items-center justify-content-center">
							<p class="ms-2 pt-3">
								850 руб 
							</p>
							<button class="btn-color px-3 py-1 ms-4">В корзину</button>
						</div>
					</div>
				</div>
			</div>
			<!--третья карточка-->
			<?php 
				$connect = mysqli_connect("MySQL-8.2", "root", "", "wishlist");
				$query = mysqli_query($connect, 'SELECT * FROM games');

				$game3 = $query -> fetch_assoc();
						
 			?>
			<div class="d-flex mt-2" style="background: #3d4d5d; opacity:<?php 
				if (empty($game3['img'])) {
				 	echo "0";
				 }else{
				 	echo "1";
				 } ?>;">

				<div class="d-flex align-items-center px-2">
					<img src="img/handle.png">
				</div>
				<div class="col-11 d-flex p-3" style="border-left: 1px solid;">
					<div class="col-4">						
						<img src="<?php echo $game3['img'] ?>" class="w-100">
					</div>

					<div class="col-5">
						<p class="text-light fw-normal fs-4 ms-3"><?php echo $game3['names'] ?></p>					
					</div>
					<div class="col-3 d-flex align-items-center">
						<div class="cart-price mx-auto d-flex align-items-center justify-content-center">
							<p class="ms-2 pt-3">
								<?php echo $game3['price'] ?>
							</p>
							<button class="btn-color px-3 py-1 ms-4">В корзину</button>
						</div>
					</div>
				</div>
			</div><!--конец третьей карточки-->			
		</div>><!--конец блока в середине-->		
	</div><!--конец основного блока-->
</body>
</html>