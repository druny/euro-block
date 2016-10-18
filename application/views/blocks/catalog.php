<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="current-order">
		<div class="container">
			<div class="current-order-title current-order-bg col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<h1>Здесь вы можете:  посмотреть историю заказов, заказать новую партию, посомтреть отгрузки</h1>
			</div>
			<div class="personal-info current-order-bg col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h4>Личный кабинет пользователя:</h4>
				<button class="exit col-lg-3 col-md-3 col-sm-12 col-xs-12" href="#!" type="submit"><a href="/auth/logout" class="exit-text" >Выход</a></button>
				<p class="name col-lg-9 col-md-9 col-sm-12 col-xs-12"><a href="/cabinet/all_orders"><?= $username; ?></a></p>
			</div>

			<div class="order-info  col-xs-12">
				<h4>Каталог</h4>
				<table class="table-order">
				<?php foreach ($products as $product): ?>
					<form action="/blocks/cart_add" method="post" class="product-item">
					<tr>
						<td>
							<p><?= $product->name; ?></p>
							
						</td>
						<td>
							<p><?= $product->price; ?> руб.</p>
						</td>
						<td>
							<input type="number" min="0" name="product_<?= $product->id; ?>" id="product_<?= $product->id; ?>">
						</td>
						<td>
							<input type="submit" class="col-md-offset-3 to-cart btn btn-warning" value="В корзину">
						</td>
					</tr>
					</form>
				<?php endforeach; ?>
				</table>
			</div>
			
		</div>
			
			<?php 
				if (!$this->ion_auth->logged_in()) {
					echo '<h1 class="text-center text-info">' . 'Чтобы купить онлайн, ' . '<a href="/register"> зарегестрируйтесь</a>' . '</h1>';
				}
				?>
</div>


	<div class="calculator">
	<img class="divide" src="/img/t_1.png" alt="">
		<div class="container">
			<div class="title-topic title-width">
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