<div class="current-order">
		<div class="container">
			<div class="current-order-title current-order-bg col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<h1>Здесь вы можете:  посмотреть историю заказов, заказать новую партию, посомтреть отгрузки</h1>
			</div>
			<div class="personal-info current-order-bg col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h4>Личный кабинет пользователя:</h4>
				<button class="exit col-lg-3 col-md-3 col-sm-12 col-xs-12" href="#!" type="submit"><a class="exit-text" >Выход</a></button>
				<p class="name col-lg-9 col-md-9 col-sm-12 col-xs-12"><a href="/cabinet/all_orders"><?= $username; ?></a></p>
			</div>

			<div class="order-info col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Оплата</h4>
				<table class="table-order">
					<tr>
						<td>
							<p>Заказ №<?= $order->id; ?></p>
							<input type="hidden" id="task_id" name="task_id" value="<?= $order->id; ?>">
						</td>
						<td><p><?= $order->order_date; ?></p></td>
					</tr>
					<tr>
						<td>
							<p>оплаченно:</p>
						</td>
						<td>
							<?php if ($is_taken && !$order->is_done): ?>
								<input type="number" name="paid" id="paid" value="<?= $order->paid; ?>">
							<?php else: echo $order->paid; endif; ?>
						</td>
					</tr>
				</table>
			</div>
			<div class="order-info col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Отгрузка</h4>
				<table class="table-order">
					<tr>
						<td>
							<p>отгруженно:</p>
						</td>
						<td>
							<?php if ($is_taken && !$order->is_done): ?>
								<input type="number" name="blocks_shipped" id="blocks_shipped" value="<?= $order->blocks_shipped; ?>">
							<?php else: echo $order->blocks_shipped; endif; ?>
						</td>
					</tr>
					<tr>
						<td>
							<p>Осталось:</p>
						</td>
						<td>
							<?php if ($is_taken && !$order->is_done): ?>
								<input type="number" name="blocks_left" id="blocks_left" value="<?= $order->blocks_left; ?>">
							<?php else: echo $order->blocks_left; endif; ?>
						</td>
					</tr>
				</table>
			</div>
			<div class="order-info col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Отгрузка поддонов</h4>
				<table class="table-order">
					<tr>
						<td>
							<p>отгруженно:</p>
						</td>
						<td>
							<?php if ($is_taken && !$order->is_done): ?>
								<input type="number" name="pallets_shipped" id="pallets_shipped" value="<?= $order->pallets_shipped; ?>">
							<?php else: echo $order->pallets_shipped; endif; ?>
						</td>
					</tr>
					<tr>
					<td>
						<p>Осталось:</p>
					</td>
					<td>
						<?php if ($is_taken && !$order->is_done): ?>
							<input type="number" name="pallets_left" id="pallets_left" value="<?= $order->pallets_left; ?>">
						<?php else: echo $order->pallets_left; endif; ?>
					</td>
				</table>
			</div>
			<?php if ($is_taken && !$order->is_done): ?>
				<div class="col-xs-12 ">
					<div class="text-center">
						<button type="button" id="change-data">OK</button>
					</div>
				</div>
			<?php endif; ?>

			<div class="clearfix">
				
			</div>
			<div class="order-info flow col-lg-10 col-md-9 col-sm-8 col-xs-12">
				<h4>Текущий заказ</h4>
				<table class="table-order">
					<?php foreach ($products as $product): ?>
						<tr>
							<td>
								<p><?= $product->block_name . ': ' . $product->name; ?></p>
							</td>
							<td>
								<p>кол-во: <?= $product->amount; ?></p>
							</td>
							<td>
								<p>Стоимость: <?= $product->total_price; ?> р</p>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="order-info col-lg-2 col-md-3 col-sm-4 col-xs-12">
			<h4>Всего к оплате</h4>
				<table class="table-order">
					<tr>
						<td>
							<p><?= $order->sum; ?> Р</p>
						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			<div class="order-info delivery col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Заказать доставку:</h4>
				<table class="table-order">
					<tr>
						<td>
							<p>Город:</p>
						</td>
						<td>
							<p><?= $order->city; ?></p>
						</td>
					</tr>
				</table>
				<table class="table-order">
					<tr>
						<td>
							<p>Улица:</p>
						</td>
						<td>
							<p><?= $order->street; ?></p>
						</td>
					</tr>
				</table>
				<table class="table-order">
					<tr>
						<td>
							<p>Населенный пункт</p>
						</td>
						<td>
							<p><?= $order->locality; ?></p>
						</td>
					</tr>
				</table>
				<table class="table-order">
					<tr>
						<td>
							<input type="radio" name="crane" <?php if ($order->crane == 1) echo "checked"; ?> disabled>
						</td>
						<td>
							<p>С краном</p>
						</td>
						<td>
							<input type="radio" name="crane" <?php if ($order->crane == 0) echo "checked"; ?> disabled>
						</td>
						<td>
							<p>Без крана</p>
						</td>
					</tr>
				</table>
			</div>
			<div class="order-info col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<h4>На какое число</h4>
				<input type="date" name="calendar" value="<?= $order->delivery_date; ?>" disabled>
				<div class="text-center" style="">
					<?php if ($is_taken && !$order->is_done): ?>
						<a href="/cabinet/complete_task/<?= $order->id; ?>" class="btn">Завершить заказ</a>
					<?php elseif(!$is_taken && !$order->is_done): ?>
						<a href="/cabinet/take_task/<?= $order->id; ?>" class="btn">Взять заказ</a>
					<?php elseif($order->is_done): ?>
						Задание уже выполнено.
					<?php endif; ?>
				</div>
			</div>
			<div class="order-info delivery col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Заказать доставку:</h4>
				<table class="table-order">
					<tr>
						<td>
							<p>Имя:</p>
						</td>
						<td>
							<p><?= $order->first_name; ?></p>
						</td>
					</tr>
				
					<tr>
						<td>
							<p>Фамилия:</p>
						</td>
						<td>
							<p><?= $order->last_name;; ?></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Компания:</p>
						</td>
						<td>
							<p><?= $order->company; ?></p>
						</td>
					</tr>
					<tr>

						<td>
							<p>Телефон:</p>
						</td>
						<td>
							<p<?= $order->phone; ?></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>E-mail:</p>
						</td>
						<td>
							<p><?= $order->email; ?></p>
						</td>
					</tr>
				</table>
				<table class="table-order">
					<tr>
						<td>
							<p>Тип оплаты:</p>
						</td>
						<td>
							<p> <?= $order->payment_type; ?> </p>
						</td>
					</tr>
				</table>
			</div>
		</div>
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