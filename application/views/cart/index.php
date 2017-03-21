<div class="current-order">
		<div class="container">
		<div class="admin-btn col-sm-4 col-xs-12">
			<a href="/cabinet">
				<img src="/img/menu-icon.png" alt="all orders">
				<p>Все заказы</p>
			</a>
		</div>
		
		<div class="admin-btn col-sm-4 col-xs-12">
			<a href="/cabinet/archive">
				<img src="/img/arhive.png" alt="active">
				<p>История заказов</p>
			</a>
		</div>
			<div class="current-order-title current-order-bg col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<h1>Здесь вы можете:  посмотреть историю заказов, заказать новую партию, посомтреть отгрузки</h1>
			</div>
			<div class="personal-info current-order-bg col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h4>Личный кабинет пользователя:</h4>
				<button class="exit col-lg-3 col-md-3 col-sm-12 col-xs-12" href="#!" type="submit"><a class="exit-text" >Выход</a></button>
				<p class="name col-lg-9 col-md-9 col-sm-12 col-xs-12"><a href="/cabinet"><?= $username; ?></a></p>
			</div>
			<div class="order-info flow col-lg-10 col-md-9 col-sm-8 col-xs-12">
				<h4>Текущий заказ</h4>
				<table class="table-order">
					<?php foreach ($products as $product): ?>
						<tr>
							<td>
								<p><?= $product['block_name'] . ': ' . $product['name']; ?></p>
							</td>
							<td>
								<p>Кол-во: <?= $product['amount']; ?></p>
							</td>
							<td>
								<p>Стоимость: <?= $product['total_price']; ?> р</p>
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
							<p><?= $sum; ?> Р</p>
						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			<?php if(!empty($data['error_date'])): ?>
				<h1 class="text-warning"><?= $data['error_date'] ?></h1>
			<?php endif; ?>
			<form action="/cart/order" method="post" class="cart-form">
				<div class="order-info delivery  col-sm-12 col-xs-12">
					<h4>Заказать доставку:</h4>
					<table class="table-order">
						<tr>
							<td>
								<p>Населенный пункт</p>
							</td>
							<td>

								<select name="settlement_id" id="">
								<?php foreach ($settlements as $settlement): ?>
									<option value="<?= $settlement['id'] ?>">
										<?= $settlement['name'] ?>
									</option>
								<?php endforeach; ?>
								</select>
							</td>
						</tr>
					
						<tr>
							<td>
								<p>Улица:</p>
							</td>
							<td>
								<input type="text" name="street">
							</td>
						</tr>
					</table>
					<table class="table-order col-sm-6 col-xs-12">
						<tr>
							<td>
								<input type="radio" name="crane" id="with" value="1">
							</td>
							<td>
								<label for="with" class="label-radio">
									<p>С краном</p>
								</label>
							</td>
							<td>
								<input type="radio" name="crane" id="without" value="0">
							</td>
							<td>
								<label for="without" class="label-radio">
									<p>Без крана</p>
								</label>
							</td>
							<td>
								<input type="radio" name="crane" id="nothing" value="2">
							</td>
							<td>
								<label for="nothing">
									<p>Без доставки</p>
								</label>
							</td>
						</tr>
					</table>
				</div>
				<div class="order-info  col-sm-5 col-xs-12">
					<h4>На какое число</h4>
					<input type="date" name="delivery_date" >
					<p>Доставка осуществляется только в рабочие дни и не раньше 2-х дней со дня заказа.</p>
				</div>
				<div class="type-payment order-info col-sm-7 col-xs-12">
					<h4>Выбрать тип оплаты</h4>
					<table>
						<tr>
							<td>
								<input class="payment" type="radio" name="payment_type" id="without" value="score">
							</td>
							<td>
								<button type="button"  data-toggle="modal" data-target="#scoreModal">
										<a href="#!">
											<img src="img/Векторный смарт-объект2.png" alt="">
										</a>
								</button>
							</td>
								<td>
									<button type="button"  data-toggle="modal" data-target="#scoreModal">
										<p>Получить счет на оплату</p>
									</button>
								</td>
						</tr>
					</table>
					<table>	
						<tr>
							<td>
								<input class="payment" type="radio" name="payment_type" id="without" value="requisites">
							</td>
							<td>
								<button type="button" data-toggle="modal" data-target="#requisiteModal">
									<a href="#!">
										<img src="img/Векторный смарт-объект3.png" alt="">
									</a>
								</button>	
							</td>
							<td>
								<button type="button" data-toggle="modal" data-target="#requisiteModal">
									<p>Реквизиты</p>
								</button>
							</td>
						</tr>
					</table>
					<table>	
						<tr>
							<td>
								<input class="payment" type="radio" name="payment_type" id="without" value="cash">
							</td>
							<td>
								<button type="button" data-toggle="modal" data-target="#cashModal">
									<a href="#!">
										<img src="img/Векторный смарт-объект4.png" alt="">
									</a>
								</button>
							</td>
							<td>
								<button type="button" data-toggle="modal" data-target="#cashModal">
									<p>Оплатить наличными</p>
								</button>
							</td>
						</tr>
					</table>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-offset-8">
					<button class="btn btn-warning">Заказать</button>
				</div>
			</form>
		</div>
	</div>
	<div class="calculator">
	<img class="divide" src="img/t_1.png" alt="">
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
						<img src="img/calc.png" alt="">
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


	<!-- score modal -->
<div class="modal fade" id="scoreModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Получить счет на оплату</h4>
      </div>
      <div class="modal-body">
        Для получения квитанции, выберите данный пункт, зайдите в личный кабинет и распечатайте бланк.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<!-- requisite modal -->

	<div class="modal fade" id="requisiteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Реквизиты</h4>
      </div>
      <div class="modal-body">
        <p>5469500010207050</p> 
        <p>Марк Владимирович</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<!-- cash modal -->

	<div class="modal fade" id="cashModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Оплата наличными</h4>
      </div>
      <div class="modal-body">
        <p>Оплата у нас в офисе</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>