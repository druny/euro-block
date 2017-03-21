<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Euro-Block</title>
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link rel="stylesheet" href="/css/style.min.css">
	<link rel="stylesheet" href="/css/template.css">
</head>
<body>
	<div class="header">
		<div class="header-menu">
			<div class="container">
				<nav role="navigation" class="navbar navbar-default header-list">
				<div class="container">
			  <!-- Логотип и мобильное меню -->
					<div class="navbar-header">

						<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
						    <span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
							<a href="#!">
								<img class="logo" src="/img/logo2.png" alt="logo">
							</a>
							<div class="mobile-info">
				
					       		<a class="basket" href="/cart">корзина <?= count($this->session->products); ?></a>
					       		<p class="phone">+7 (423) 230-12-18</p>
							
							</div>

						</div>
					  <!-- Навигационное меню -->
					    <div id="navbarCollapse" class="collapse navbar-collapse">
					      <ul class=" navbar-nav menu">
					        <li class="menu-item">
								<a href="#factory">О заводе</a>
							</li>
							<li class="menu-item">
								<a href="#benefits">Преимущества</a>
							</li>
							<li class="menu-item">
								<a href="#objects">Объекты</a>
							</li>
							<li class="menu-item">
								<a href="#products">Продукция</a>
							</li>
							<li class="menu-item">
								<a href="#calculator">Калькулятор</a>
							</li>
							<!-- <li class="menu-item">
								<a href="#mass_media">СМИ о нас</a>
							</li>
							<li class="menu-item">
								<a href="#reviews">Отзывы</a
							></li> -->
							<li class="menu-item">
								<a href="#certifications">Сертификаты</a>
							</li>
							<li class="menu-item">
								<a href="#contacts">Контакты</a>
							</li>
							<li class="menu-item">
								<a href="/blocks/catalog">Каталог</a>
							</li>
					      </ul>
					   <li class="request nav navbar-nav ">
					   		<a class="basket" href="/cart">
					   			<img  class="trunk" src="img/trunk2.png" alt="">
					        	корзина <?= count($this->session->products) ?>
					        </a>
					   </li>
					   <li class="request nav navbar-nav navbar-right">
							<p class="phone">+7 (423) 230-12-18</p>
							
							<a class="request-call" type="button" data-toggle="modal" data-target="#myModal" href="#!">
								Заказать обратный звонок
							</a>
							
						</li>
				    </div>
				   </div>
				</nav>

			</div>
		</div>
	<div class="container">
			<div class="title-block col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="title-block-first">
					<h1>Тереховский завод бетонных изделий</h1>
				</div>
				<div class="title-block-second">
					<p>Идеальная геометрия блока, высокая прочность и долговечность
					Напрямую <br>с завода с доставкой на Ваш объект за 1 день</p>
				</div>
			</div>
			<?php if ( ! $this->ion_auth->logged_in()): ?>
				<div class="login col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<h2 class="login-topic">Войти в личный кабинет</h2>
					<div class="login-errors"><?= $this->session->flashdata('login_errors'); ?></div>
					<form class="entrance" action="/auth/login" method="post">
						<input type="text" name="identity" placeholder="E-mail:" value="<?php if ( ! empty($this->session->flashdata('login'))) echo $this->session->flashdata('login'); ?>">
						<a class="registration" href="/register">Регистрация</a> 
						<input type="password" name="password" placeholder="Пароль:">
						<button type="submit" id="login-btn" class="login-btn">Войти</button> 
					</form>
				</div>
			<?php else: ?>
				<div class="personal-info login current-order-bg col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<h4>Личный кабинет пользователя:</h4> 
					<a href="/auth/logout" class="exit-text" >
						<button class="exit col-lg-3 col-md-3 col-sm-12 col-xs-12" type="submit">
							Выход
						</button> 
					</a>
					<p class="name col-lg-9 col-md-9 col-sm-12 col-xs-12"><a href="/cabinet"><?= $this->ion_auth->user()->row()->first_name . ' ' . $this->ion_auth->user()->row()->last_name; ?></a></p> 
				</div>
			<?php endif; ?>
			<div class="header-video col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<iframe width="700" height="420" src="https://www.youtube.com/embed/2xhnCsNFrbI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="feedback col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h3 class="feedback-topic">
					Хотите купить блоки прямо сейчас?*
				</h3>
				<div class="text-center">
					<a href="/blocks/catalog">
						<img src="/img/products/block01.png" alt="Хотите купить блоки прямо сейчас?*">
					</a>
				</div>
				<h5 class="feedback-topic">*только для зарегестрированных пользователей</h5>
				<a href="/blocks/catalog">
					<button  class="get" type="submit">
						<img class="get-img" src="/img/send.png" alt="">
						<p class="get-text" >Перейти в каталог</p>
					</button>
				</a>

				<i class="my-icon"><i></i></i>
			</div>
		</div>
	</div>

	<!--<div class="info">
	<a id="factory"></a>
		<div class="container">
			<div class="info-header">
				<span class="info-title col-lg-3 col-md-3 col-sm-3 col-xs-6">Работаем <br>с 1991года</span>
				<span class="info-title col-lg-3 col-md-3 col-sm-3 col-xs-6">100 000 м<sup><small>3</small></sup> стеновых <br>блоков в год</span>
				<span class="info-title col-lg-3 col-md-3 col-sm-3 col-xs-6">Системе менеджмента <br>качества исо-9001</span>
				<span class="info-title col-lg-3 col-md-3 col-sm-3 col-xs-6">Неоднократный победитель <br>"100 лучших товаров России"</span>
			</div>
			<section  class="info-description">
				<div class="info-description-first col-lg-5 col-md-6 col-sm-12 col-xs-12">
					<img src="/img/1991.png" alt="">
					<p class="main-descr">
						Тереховский завод бетонных изделий – приморский производитель уникальных строительных материалов из андезитобазальта для строительства домов любой этажности.
					</p>
					<p class="descr">
						Завод построен финскими и российскими специалистами в 1991-м году в селе Тереховка Приморского края, рядом с единственным на Дальнем Востоке карьером андезитобазальтов. 
						Эта вулканическая горная порода сочетает в себе легкость и прочность, практически не впитывает влагу (что критически важно для строительства во влажном климате), является экологически чистым и безопасным природным материалом.
					</p>
					<img src="/img/liniya.png" alt="">
				</div>
				<div class="info-description-second col-lg-7 col-md-6 col-sm-12 col-xs-12">
					<img src="/img/secondDescr.png" alt="">
					<p class="descr descr-second">
						Помимо стеновых, перегородочных и вентиляционных блоков из андезитобазальта, Тереховский завод производит несколько видов тротуарной плитки, дорожные и тротуарные бордюры.
					</p>
					<p class="descr descr-second">
						Наличие собственного карьера позволяет Тереховскому заводу предлагать оптимальные для потребителей цены на свою продукцию.
						А возможность купить необходимые вам строительные материалы в любом объеме непосредственно у производителя не только позволяет сэкономить,но и является гарантией качества продукции и защитой от подделок.
					</p>
					<img src="/img/05.jpg" alt="">
				</div>
				<div class="clearfix"></div>
			</section>
		</div>
	</div>-->

	<div class="advantages">
	<img class="divide" src="/img/t_1.png" alt="">
		<div class="container">
			<div class="advantages-title" id="benefits">
				<h1 class="title">Преимущества андезитобальтового блока</h1>	
			</div>
			<div class="advantages-info">
			<span class="descr">
				<h2 class="descr-title">Долговечный</h2>
				<p class="descr-text">
					является практически вечным материалом,
					не подверженным воздействию времени,
					не гниет, обладает прочностью камня.
				</p>
			</span>
			<span class="descr">
				<h2 class="descr-title">Низкая теплопроводность</h2>
				<p class="descr-text">Коэффициент теплопроводности
					блока 0,45 Вт/м°C.
				</p>
			</span>
			<span class="descr">
				<h2 class="descr-title">Огнестойкость</h2>
				<p class="descr-text">2,5 часа</p>
			</span>
			<span class="descr">
				<h2 class="descr-title">Абсолютно не боится влаги</h2>
				<p class="descr-text">Водопоглащение 8,79%</p>
			</span>
			<span class="descr">
				<h2 class="descr-title">Экологичный</h2>
				<p class="descr-text">Блок имеет соответсвующие
					сертификаты, без применения
					химических материалов
				</p>
			</span>
			<span class="descr">
				<h2 class="descr-title">Высокая прочность</h2>
				<p class="descr-text">f max 883,001 kH</p>
			</span>
			<span class="descr">
				<h2 class="descr-title">Система менеджмента качества</h2>
				<p class="descr-text">ИСО-9001</p>
			</span>
			<span class="descr">
				<h2 class="descr-title">Идеальная геометрия</h2>
				<p class="descr-text">390×190×188 мм</p>
			</span>
				<img class="descr-img" src="/img/info-block.png" alt="">

			</div>
			<img class="advantages-img image" src="/img/vodopogloshenie.png" alt="info">
			

			<div class="distinction">
				<img src="/img/first_luchshih_2007.png" alt="">
				<img src="/img/luchiy_tovar_prim_2007.png" alt="">
			</div>
			<div class="eko">
				<img src="/img/1eko.png" alt="">
				<img src="/img/2eko.png" alt="">
			</div>
		</div>
		
	</div>
	<div class="objects">
		<img class="divide" src="/img/t_1.png" alt="">
		<div class="container">
			<div class="title-topic" id="objects">
				<h1 class="title">Объекты</h1>
			</div>
			<div class="title-descr">
				<p>
					Из тереховских блоков на Дальнем Востоке России построены
					сотни современных зданий разной этажности и назначения
					На этой странице представлены некоторые из них
				</p>
			</div>
			
			<div class="objects-items-first clearfix">
				<div class="items col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<img src="/img/items/1.jpg" alt="">
					<p>КСК «Фетисов Арена» (г. Владивосток, ул. Маковского, 284)</p>
				</div>
				<div class="items col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<img src="/img/items/2.jpg" alt="">
					<p>Гостиница «Hyatt Vladivostok, Burny» (г. Владивосток, ул. Набережная, 13)</p>
				</div>
				<div class="items col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<img src="/img/items/3.jpg" alt="">
					<p>Торгово-развлекательный центр «Clover House» (г. Владивосток,  ул. Семёновская, 15)</p>
				</div>
				<div class="items col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<img src="/img/items/4.jpg" alt="">
					<p>Здание Пенсионного фонда РФ (г. Владивосток, ул. Фонтанная, 16)</p>
				</div>
				<div class="items col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<img src="/img/items/5.jpg" alt="">
					<p>Гостиница «Hyatt Regency Vladivostok,  Golden Horn» (г. Владивосток,  Корабельная Набережная, 10)</p>
				</div>
				<div class="items col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<img src="/img/items/6.jpg" alt="">
					<p>Торговый комплекс «Центральный» (г. Владивосток, ул. Светланская, 29)</p>
				</div>				
			</div>
			<div class="objects-items-second clearfix">
				<div class="items col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="/img/items/7.jpg" alt="">
					<p>Жилой комплекс «Некрасов» (г. Владивосток,  ул. 2-я Круговая, 12)</p>
				</div>
				<div class="items col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="/img/items/8.jpg" alt="">
					<p>Офисное здание (г. Владивосток, ул. Мордовцева, 6)</p>
				</div>
				<div class="items col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="/img/items/9.jpg" alt="">
					<p>Жилой дом  (г. Владивосток, ул. Каплунова, 6)</p>
				</div>
				<div class="items col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="/img/items/10.jpg" alt="">
					<p>Бизнес-центр «Capital Tower»  (г. Владивосток, ул. Западная, 7)</p>
				</div>
			</div>

		</div>
	</div>
	<div class="products">
		<img class="divide" src="/img/line.png" alt="">
		<div class="container">
			<div class="title-topic" id="products">
				<h1 class="title">Продукция</h1>
			</div>
		<div class="items clearfix">
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/block01.png" alt="">
				<a href="/blocks/product/1" class="item-title">Блок стеновой m50/ М75/ m100</a>
				<p class="item-description">Маркировка: КСР-ПР-ПС-39-50-F50-1450; ГОСТ 6133–99</p>
				<!-- <a href="/blocks/product/1">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
				
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/block02.png" alt="">
				<a href="/blocks/product/2" class="item-title">Блок перегородочный</a>
				<p class="item-description">Маркировка: КПР-ПР-ПС-39-35-F50-1390</p>
				<!-- <a href="/blocks/product/2">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/block03.png" alt="">
				<a href="/blocks/product/3" class="item-title">Блок стеновой рядовой</a>
				<p class="item-description">Маркировка: КСР-ПР ПС-ПСБ-39-35-F25-1000</p>
				<!-- <a href="/blocks/product/3">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/block04.png" alt="">
				<a href="/blocks/product/4" class="item-title">Блок стеновой угловой</a>
				<p class="item-description">Маркировка: КСР-УГ ПС-ПСБ-49,5-35-F25-1000</p>
				<!-- <a href="/blocks/product/4">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/block05.png" alt="">
				<a href="/blocks/product/5" class="item-title">Блок половинчатый перевязочный </a>
				<p class="item-description">Маркировка: КСР-ПЗ ПС-ПСБ-19-35-F25-1000</p>
				<!-- <a href="/blocks/product/5">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/Euroblock6.png" alt="">
				<a href="/blocks/product/7" class="item-title">Евроблок стеновой</a>
				<p class="item-description"></p>
				<!-- <a href="/blocks/product/7">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>	
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/Ventblock7.png" alt="">
				<a href="/blocks/product/6" class="item-title">Блоки вентиляционные</a>
				<!-- <a href="/blocks/product/6">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/plitka01_red8.png" alt="">
				<a href="/blocks/product/8" class="item-title">Брусчатка фигурная "Волна"</a>
				<!-- <a href="/blocks/product/8">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/plitka02 9.png" alt="">
				<a href="/blocks/product/8" class="item-title">Брусчатка прямоугольная</a>
				<!-- <a href="/blocks/product/8">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/plitka_new2 (1)10.png" alt="">
				<a href="/blocks/product/8" class="item-title">Брусчатка  «Старый город»</a>
				<!-- <a href="/blocks/product/8">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/bordur3 11.png" alt="">
				<a href="/blocks/product/9" class="item-title">Бордюр тротуарный</a>
				<!-- <a href="/blocks/product/9">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/bordur12.png" alt="">
				<a href="/blocks/product/9" class="item-title">Бордюр дорожный</a>
				<!-- <a href="/blocks/product/9">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/plitka_120_120 13.png" alt="">
				<a href="/blocks/product/8" class="item-title">Брусчатка "Квадрат"</a>
				<!-- <a href="/blocks/product/8">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<img class="item-img" src="/img/products/scheb_gr_4(14).png" alt="">
				<a href="/blocks/product/10" class="item-title">Щебень</a>
				<!-- <a href="/blocks/product/10">
					<button type="submit" class="item-button">
						<img src="/img/black-bus.png" alt="">
						<h3>Перейти</h3>
					</button>
				</a> -->
			</div>
		</div>
	</div>
	</div>

	<div class="calculator">
	<img class="divide" src="img/line.png" alt="">
		<div class="container">
			<div class="title-topic title-width" id="calculator">
				<h1 class="title">Рассчитать стоимость</h1>
			</div>
			<h2 class="calculator-title">Калькулятор расчета количества блоков</h2>


			<!-- Start calculator -->
			<div id="calc" class="calc">
				<div class="calc_i">
					<div class="calc_i_h">1. Размеры жилого дома</div>
					<div class="calc_i_fields">
						<div class="calc_i_fields_i">
							<div class="calc_i_fields_i_lbl">Периметр (м)</div>
							<input id="calc-perimeter" class="calc_i_fields_i_val" name="perimeter" value="20">
						</div>
						<div class="calc_i_fields_i">
							<div class="calc_i_fields_i_lbl">Высота (м)</div>
							<input id="calc-height" class="calc_i_fields_i_val" name="height" value="5">
						</div>
					</div>
				</div>
				<div class="calc_i">
					<div class="calc_i_h">2. Архитектурные особенности</div>
					<div class="calc_i_cols">
						<div class="calc_i_cols_fields-left-c">
							<div class="calc_i_description">
								Если размеры дверей разные, то в поле <b>"Количество внешних дверей (шт)"</b> введите <b>"1"</b>, в поле <b>"Ширина одной двери (м)"</b> - сумму длин всех дверей, в поле <b>"Высота одной двери (м)"</b> - сумму высот всех дверей
							</div>
							<div class="calc_i_fields">
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">
										Количество внешних дверей (шт)
									</div>
									<input id="calc-doorsQuantity" class="calc_i_fields_i_val" name="doorsQuantity" value="1">
								</div>
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">
										Ширина одной двери (м)
									</div>
									<input id="calc-doorWidth" class="calc_i_fields_i_val" name="doorWidth" value="1">
								</div>
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">
										Высота одной двери (м)
									</div>
									<input id="calc-doorHeight" class="calc_i_fields_i_val" name="doorHeight" value="2">
								</div>
							</div>
						</div>
						<div class="calc_i_cols_fields-right-c">
							<div class="calc_i_description">
								Если размеры окон разные, то в поле <b>"Количество окон (шт)"</b> введите <b>"1"</b>, в поле <b>"Ширина одного окна (м)"</b> - сумму длин всех окон, в поле <b>"Высота одного окна (м)"</b> - сумму высот всех окон
							</div>
							<div class="calc_i_fields">
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">Количество окон (шт)</div>
									<input id="calc-windowsQuantity" class="calc_i_fields_i_val" name="windowsQuantity" value="1">
								</div>
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">Ширина одного окна (м)</div>
									<input id="calc-windowWidth" class="calc_i_fields_i_val" name="windowWidth" value="1">
								</div>
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">Высота одно окна (м)</div>
									<input id="calc-windowHeight" class="calc_i_fields_i_val" name="windowHeight" value="1">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="calc_i">
					<div class="calc_i_h">3. Кладка</div>
					<div class="calc_i_cols">
						<div id="calc_brick-photo" class="calc_i_cols_photo-c calc_brick-photo">
						</div>
						<div class="calc_i_cols_info-c">
							<div class="calc_i_fields">
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">Вид кладки</div>
								<select id="calc-brick">
								    <option data-photo="img/products/block01.png" value="390/190/188">
								   	 Блок стеновой андезитобазальтовый М50
								    </option>
								    <option data-photo="img/products/block01.png" value="390/190/188">
								    	Блок стеновой андезитобазальтовый М75
								    </option>
								    <option data-photo="img/products/block01.png" value="390/190/188">	
								    	Блок стеновой андезитобазальтовый М100
								    </option>
								    <option data-photo="img/products/block02.png" value="390/90/188">
								    	Блок перегородочный андезитобазальтовый
								    </option>
								    <option data-photo="img/products/block03.png" value="390/288/188">Блок рядовой с пенополистирольным вкладышем
								    </option>
								    <option data-photo="img/products/block04.png" value="495/288/188">Блок угловой с пенополистирольным вкладышем 
								    </option>
								    <option data-photo="img/products/block05.png" value="190/288/188">Блок половинчатый с пенополистирольным вкладышем
								    </option>
								    <option data-photo="img/products/Euroblock6.png" value="390/190/188">Евроблок стеновой андезитобазальтовый
								    </option>
								</select>
								</div>
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">Толщина кладки (м)</div>
									<select id="calc-brickworkWidth" class="calc_i_fields_i_val" name="brickworkWidth">
										<option value="0.24">0.24</option>
										<option value="0.4">0.4</option>
										<option value="0.6">0.6</option>
									</select>
								</div>
								<div class="calc_i_fields_i">
									<div class="calc_i_fields_i_lbl">Толщина шва (раствора) (м)</div>
									<input id="calc-seamWidth" class="calc_i_fields_i_val" name="seamWidth" value="0.01">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="calc_i">
					<button id="calc_i_sb" class="calc_i_sb">
						<img src="/img/calc.png" alt="">
						<h3>Рассчитать</h3>
					</button>
				</div>
				<div class="calc_i calc_i__no-border">
					<div class="calc_i_fields">
						<div class="calc_i_fields_i">
							<div class="calc_i_fields_i_lbl">Количество материала</div>
							<div id="calc_i_output" class="calc_i_output calc_i_fields_i_val">
								<b>Для расчета, заполните поля.</b>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End calculator -->
		</div>
	</div>

	<!-- div class="mass-media">
		<img class="divide" src="img/line.png" alt="">
		<div class="container">
			<div class="title-topic title-width" id="mass_media">
				<h1 class="title">Что о нас пишут СМИ?</h1>
			</div>
			<div class="newspaper">
				<img src="/img/newspaper1.jpg" alt="" class="newspaper-item image col-lg-3 col-md-3 col-sm-5 col-xs-12">
				<img src="/img/newspaper2.jpg" alt="" class="newspaper-item image col-lg-5 col-md-5 col-sm-7 col-xs-12">
				<img src="/img/newspaper3.jpg" alt="" class="newspaper-item image col-lg-4 col-md-4 col-sm-12 col-xs-12">
			</div>
		</div>
	</div>
	<div class="reviews">
		<div class="container">
			<div class="title-topic title-width" id="reviews">
				<h1 class="title">Отзывы наших клиентов</h1>
			</div> -->
				
			<!-- Slider start -->

			<!-- <div id="carousel" class="carousel slide app-slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li class="active" data-target="#carousel" data-slide-to="0"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active app-item">
						<img src="/img/reviews/first-review.png" alt="">
						<div class="carousel-caption app-slide-descr">
							<h3 class="carousel-title">
								Наталья Валентиновна Пескова
							</h3>
							<p class="carausel-info">
								ведущий специалист отдела снабжения ГК RDS. Отель Hyatt Regency Vladivostok на мысе Бурный и Hyatt Regency City на Корабельной набережной.
							</p>
							<p class="carausel-review">
								- Мы давно работаем с Тереховским ЗБИ. Это надежная компания, в качестве продукции которой мы уверены. Наша компания, например, из их блоков строила здания административного комплекса для очистных сооружений во Владивостоке. Я сама, когда строила дачу, остановила свой выбор именно на их продукции. По опыту скажу, что все блоки отличаются ровной геометрией. Из них легко и удобно строить, а потом тепло жить.
								Все необходимое для строительства «вечного дома», можно купить либо прямо в офисе компании 
							</p>
						</div>
					</div>
					<div class="item app-item">
						<img src="/img/reviews/first-review.png" alt="">
						<div class="carousel-caption">
							<h3 class="carousel-title">
								Второй
							</h3>
							<p class="carausel-info">
								ведущий специалист отдела снабжения ГК RDS. Отель Hyatt Regency Vladivostok на мысе Бурный и Hyatt Regency City на Корабельной набережной.
							</p>
							<p class="carausel-review">
								- Мы давно работаем с Тереховским ЗБИ. Это надежная компания, в качестве продукции которой мы уверены. Наша компания, например, из их блоков строила здания административного комплекса для очистных сооружений во Владивостоке. Я сама, когда строила дачу, остановила свой выбор именно на их продукции. По опыту скажу, что все блоки отличаются ровной геометрией. Из них легко и удобно строить, а потом тепло жить.
								 
							</p>
						</div>
					</div>
					<div class="item app-item">
						<img src="/img/reviews/first-review.png" alt="">
						<div class="carousel-caption">
							<h3 class="carousel-title">
								Третий
							</h3>
							<p class="carausel-info">
								ведущий специалист отдела снабжения ГК RDS. Отель Hyatt Regency Vladivostok на мысе Бурный и Hyatt Regency City на Корабельной набережной.
							</p>
							<p class="carausel-review">
								- Мы давно работаем с Тереховским ЗБИ. Это надежная компания, в качестве продукции которой мы уверены. Наша компания, например, из их блоков строила здания административного комплекса для очистных сооружений во Владивостоке. Я сама, когда строила дачу, остановила свой выбор именно на их продукции. По опыту скажу, что все блоки отличаются ровной геометрией. Из них легко и удобно строить, а потом тепло жить.
							</p>
						</div>
					</div>
				</div>

				<a href="#carousel" class="prev-slide btn-slide" data-slide="prev" role="button">
					<img  src="/img/btn-left.png" alt="">
				</a>
				<a href="#carousel" class="next-slide btn-slide" data-slide="next" role="button">
					<img src="/img/btn-right.png" alt="">
				</a>
			</div>
			 -->
			<!-- Slider end -->

		</div>
	</div>
	