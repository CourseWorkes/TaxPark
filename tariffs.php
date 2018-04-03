<?php
	
	require_once "start.php";
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Тарифы</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/semantic.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script src="js/jquery.js"></script>
		<script src="js/semantic.js"></script>
	</head>
	<body>
		<div class="ui grid">
			<div class="row">
				<div class="sixteen wide column">				
					<div class="ui inverted menu">
						<a href="index.php" class="item">Главная</a>
						<a href="order.php" class="item">Заказ такси</a>
						<a href="tariffs.php" class="item">Тарифы</a>
						<a href="regions.php" class="item">Регионы</a>
						<div class="menu right">
							<a href="https://ru-ru.facebook.com/" target="__blank" class="item">
								<i class="ui big icon facebook"></i>
							</a>
							<a href="https://twitter.com/?lang=ru" target="__blank" class="item">
								<i class="ui big icon twitter"></i>
							</a>
							<a href="http://youtube.com" target="__blank" class="item">
								<i class="ui big icon youtube"></i>
							</a>
							<a href="https://plus.google.com/communities/114756686051959994569" target="__blank" class="item">
								<i class="ui big icon google plus g icon"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="sixteen wide column">
					<figure id="logo">
						<img src="media/logo.jpg" alt="">
						<figcaption><h1>Таксопарк «Индекс.Такси»</h1></figcaption>
					</figure>
				</div>
			</div>
			<div class="row">
				<div class="two wide column">
				</div>
				<div class="twelve wide column">
					<div class="ui  piled horizontal segments" id="tariffs">
					  <div class="ui blue segment">
						<div class="ui header"><h1>Эконом</h1></div>
						<hr>
						<div class="content">
							<fieldset>
								<legend><h4>Машины</h4></legend>
								<div class="ui labels">
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										Volkswagen Polo
									</a>
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										Ford Focus
									</a>
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										Hyundai Solaris
									</a>
								</div>
							</fieldset>
							<table class="ui table">
								<thead>
									<th>Время</th>
									<th>Цена</th>
								</thead>
								<tbody>
									<tr>
										<td class="ui ribbon label">От 1 минуты</td>
										<td>25 ₽</td>
									</tr>
								</tbody>
							</table>
						</div>
					  </div>
					  <div class="ui green segment">
						<div class="ui header"><h1>Комфорт</h1></div>
						<hr>
						<div class="content">
							<fieldset>
								<legend><h4>Машины</h4></legend>
								<div class="ui labels">
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										Volkswagen Passat
									</a>
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										Skoda Octavia
									</a>
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										Ford Focus
									</a>
								</div>
							</fieldset>
							<table class="ui table">
								<thead>
									<th>Время</th>
									<th>Цена</th>
								</thead>
								<tbody>
									<tr>
										<td class="ui ribbon label">От 1 минуты</td>
										<td>50 ₽</td>
									</tr>
								</tbody>
							</table>
						</div>
					  </div>
					  <div class="ui red segment">
						<div class="ui header"><h1>Бизнес</h1></div>
						<hr>
						<div class="content">
							<fieldset>
								<legend><h4>Машины</h4></legend>
								<div class="ui labels">
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										Mercedes E
									</a>
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										Audi A6
									</a>
									<a class="ui basic label">
										<i class="ui big car icon"></i>
										BMW 5
									</a>
								</div>
							</fieldset>
							<table class="ui table">
								<thead>
									<th>Время</th>
									<th>Цена</th>
								</thead>
								<tbody>
									<tr>
										<td class="ui ribbon label">От 1 минуты</td>
										<td>100 ₽</td>
									</tr>
								</tbody>
							</table>
						</div>
					  </div>
					</div>
				</div>
				<div class="two wide column">
				</div>
			</div>
			<div class="row" style="padding: 0px; margin: 0px; margin-top: 25px;">
				<div class="sixteen wide column">
					<div class="ui grid  inverted menu">
						<div class="row">							
							<div class="two wide column">
							
							</div>
							<div class="four wide column">
								<div class="ui inverted segment">
									<h1 class="ui header">Карта сайта</h1>
									<div class="ui list">
										<div class="item">
											<i class="linkify icon"></i>
											<div class="content w-link">
												<a href="index.php">Главная</a>		
											</div>
										</div>
										<div class="item">
											<i class="linkify icon"></i>
											<div class="content w-link">
												<a href="order.php">Заказ такси</a>
											</div>
										</div>
										<div class="item">
											<i class="linkify icon"></i>
											<div class="content w-link">
												<a href="tariffs.php">Тарифы</a>
											</div>
										</div>
										<div class="item">
											<i class="linkify icon"></i>
											<div class="content w-link">
												<a href="regions.php">Регионы</a>	
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="four wide column">
								<div class="ui inverted segment">
									<h1 class="ui header">Социальные сети</h1>
									<a href="https://ru-ru.facebook.com/" target="__blank">
										<i class="ui big icon facebook"></i>
									</a>
									<a href="https://twitter.com/?lang=ru" target="__blank">
										<i class="ui big icon twitter"></i>
									</a>
									<a href="http://youtube.com" target="__blank">
										<i class="ui big icon youtube"></i>
									</a>
									<a href="https://plus.google.com/communities/114756686051959994569" target="__blank">
										<i class="ui big icon google plus g icon"></i>
									</a>
								</div>
							</div>
							<div class="four wide column">
								<div class="ui inverted segment">
									<div class="ui header">
										<h1>О нас</h1>
									</div>
									<div class="content">
										<p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix.</p>
										<figcaption>									
											<a>Copyright 2018 © Фирма Кредо</a>
										</figcaption>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			
			$('.ui.dropdown').dropdown();
			
		</script>
		
	</body>
</html>