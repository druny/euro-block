<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blank</title>
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link rel="stylesheet" href="/css/style.min.css">
</head>
<body>
	<a  href='javascript:window.print(); void 0;' class="none-print">
		<h4>Распечатать</h4><br><br><br>
	</a>
	
	<div class="container blank">
		<p class="text-center">Внимание! Оплата данного счета означает согласие сусловиями поставки товара. Уведмление об оплате обязательно, в противном случае не гарантируется наличие товара на складе. Товар отпускается по факту прихода денег на р/с Поставвщика, самовывозом, при наличии доверенности и паспорта.</p>

		<table class="table table-striped table-bordered table-hover table-responsive">
		<tr>
			<td rowspan="2" colspan="2">
				ПАО "Дальневосточный банк", г.Владивосток
				<br>
				Банк получателя
			</td>
			<td>
				Бик
			</td>
		<td rowspan="2" colspan="2">
			040507705
			<br>
			30101181090000000705
		</td>
		</tr>
		<tr>
			<td>
				Сч. № <?= $order->id; ?>
			</td>
		</tr>
		<tr>
			<td>
				ИНН 2521000927
			</td>
			<td>
				КПП 254001001
			</td>
			<td rowspan="2">
				Сч. № <?= $order->id; ?>
			</td>
			<td rowspan="2" colspan="2">
				40702810200100001334
			</td>
		</tr>
		<tr>
			<td colspan="2">
				Открытое Акционерное Общество "Тереховский Завод Бетонных Изделий"
				<br>
				Получатель
			</td>
		</tr>
	</table>


	<h4>Счет на оплату № <?= $order->id; ?> от <?= $order->delivery_date; ?></h4>

	<hr>

	<table class="table table-responsive">
		<tr>
			<td>Поставщик: </td>
			<th>Открытое Акционерное Общество "Тереховский Завод Бетонных Изделий", ИНН 2521000927, КПП 254001001, 690091, Приморский край, Владивосток г, Мордовцева ул,дом №6, тел.: 30-14-69</th>
		</tr>
		<tr>
			<td>Грузоотправитель: </td>
			<th>Открытое Акционерное Общество "Тереховский Завод Бетонных Изделий", ИНН 2521000927, КПП 254001001, 690091, Приморский край, Владивосток г, Мордовцева ул,дом №6, тел.: 30-14-69</th>
		</tr>
		<tr>
			<td>Покупатель: </td>
			<th>
			<?php if(isset($user->type)): ?>
				<?= $user->type ?> "<?= $user->company ?>", 
				ИНН <?= $user->inn ?>, КПП <?= $user->kpp ?>,
			<?php endif;?>	
				г.<?= $order->settlement ?> , ул.<?= $order->street ?>
				
			</th>
		</tr>
		<tr>
			<td>Грузополучатель: </td>
			<th>
			<?php if(isset($user->type)): ?>
				<?= $user->type ?> "<?= $user->company ?>", ИНН <?= $user->inn ?>, КПП <?= $user->kpp ?>,
			<?php endif;?>	
				г.<?= $order->settlement ?> , ул.<?= $order->street ?>
				
			</th>
		</tr>
	</table>
	<table class="table table-responsive">
		<tr>
			<th>№</th>
			<th>Артикул</th>
			<th>Товары(работы, услуги)</th>
			<th>Кол-во</th>
			<th>Ед.</th>
			<th>Цена</th>
			<th>Сумма</th>
		</tr>
		
		<?php $i = 1; foreach ($products as $product): ?>
		<tr>
			<td><?= $i++ ?></td>
			<td></td>
			<td><?= $product->name ?></td>
			<td><?= $product->amount ?></td>
			<td>шт</td>
			<td><?= $product->price ?> </td>
			<td><?= $product->total_price ?></td>
		</tr>
		<?php endforeach; ?>
		<!--  <tr>
			<td><?= $i ?></td>
			<td></td>
			<td>Доставка</td>
			<td>1</td>
			<td>шт</td>
			<td>8 640,00</td>
			<td>8 640,00</td>
		</tr> -->
	</table>
	<div class="text-right">
		<p>
		<strong>
			Итого:
		</strong>
			<?= $order->sum ?> р.
		</p>
	</div>
	<div class="text-right">
		<p>
			<strong>
				Доставка: 
			</strong>
			<?= $order->delivery_cost -=  450 * $order->number_of_pallets ?>
			 р.
		</p>
		<p>
		<strong>
			В том числе НДС:
		</strong>
			 <?php  
				 $nds = ($order->sum * 18) / 100;
				 echo $nds;
			 ?>
			 р.
		</p>
	</div>
	<div class="text-right">
		<p>
		<strong>
			Всего к оплате:
		</strong>
			 <?php 
			 	$over = $order->sum + $nds + $order->delivery_cost;
			 	echo $over; 
			 ?>
			 р.
		</p>
	</div>
	<p>Всего наименований <?= count($products) ?>, на сумму <?= $over ?> р.</p>

	<hr>
		<table class="table table-responsive">
			<tr>
				<th>Руководитель</th>
				<td class="signature">
					<p>Генеральный директор </p>
				<hr>
					<p>
						должность
					</p>
				</td>
				<td class="signature linee">
				<hr>
					<p>
						подпись
					</p>
				</td>
				<td class="signature">
					<p>
						Свищов М.В. 
					</p>
					<hr>
					<p>
						расшифровка подписи
					</p>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					Главный (старший) бухгалтер
				</th>
				<td class="signature linee">
				<hr>
					<p>
						подпись
					</p>
				</td>
				<td class="signature">
					<p>Акимова О.Д.</p>
					<hr> 
					<p>расшифровка подписи</p>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					Ответственный
				</th>
				<td class="signature linee">
					<hr>
					<p>
						подпись
					</p>
				</td>
				<td class="signature">
					<p>Крамар М.В.</p>
					<hr>
					<p>расшифровка подписи</p>
				</td>
			</tr>
		</table>
		<p><strong>Примечание:</strong></p>
		<p>Счет действителен в течении 5-ти рабочих дней.</p>
	</div>
</body>
</html>