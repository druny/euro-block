<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link rel="stylesheet" href="/css/style.min.css">
	<script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>
	<script src="/js/calc/init.js"></script>
</head>
<body>
	<header class="header-admin">
		<div class="header-menu header-menu-admin">
			<div class="container">
				<nav role="navigation" class="navbar navbar-default header-list">
			  <!-- Логотип и мобильное меню -->
					<div class="navbar-header">

						<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
						    <span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
							<a href="/">
								<img class="logo" src="/img/logo-bg.png" alt="logo">
							</a>
							
							<div class="mobile-info">
				
					       		<a class="basket" href="#!">корзина <?= $this->session->count ?></a>
					       		<p class="phone">+7 (423) 230-12-18</p>
							
							</div>

						</div>
					  <!-- Навигационное меню -->
					    <div id="navbarCollapse" class="collapse navbar-collapse">
					      <ul class=" navbar-nav menu">
					        <li class="menu-item">
								<a href="/#factory">О заводе</a>
							</li>
							<li class="menu-item">
								<a href="/#benefits">Преимущества</a>
							</li>
							<li class="menu-item">
								<a href="/#objects">Объекты</a>
							</li>
							<li class="menu-item">
								<a href="/#products">Продукция</a>
							</li>
							<li class="menu-item">
								<a href="/#calculator">Калькулятор</a>
							</li>
							<li class="menu-item">
								<a href="/#mass_media">СМИ о нас</a>
							</li>
							<li class="menu-item">
								<a href="/#reviews">Отзывы</a
							></li>
							<li class="menu-item">
								<a href="/#certifications">Сертификаты</a>
							</li>
					       </ul>
					   <li class="request nav navbar-nav ">
					   		<a class="basket" href="/cart">
					   			<img  class="trunk" src="/img/white-trunk.png" alt="">
					   			корзина <?= $this->session->count ?>
					   		</a>
					   </li>
					   <li class="request nav navbar-nav navbar-right">
							<p class="phone">+7 (423) 230-12-18</p>
							<a class="request-call" data-toggle="modal" data-target="#myModal" href="#!">заказать обратный звонок</a>
						</li>
				    </div>
				</nav>
			</div>
		</div>
	</header>