<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>


<div class="product">
			<div class="container">
				<h1 class="product-title"><?= $block->name; ?></h1>
				<div class="product-info col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="/img/products/Ventblock7.png" alt="">
					
				</div>
				<div class="product-info col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<table>
						<tr>
							<td>
								<p>Название</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>масса:</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>средняя плотность:</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>размеры:</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>теплопроводность:</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>водопоглощение:</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>кол-во штук на поддоне</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>морозостойкость:</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>огнестойкость, часы</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>цена за 1 шт.:</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>купить сумма: 0</p>
							</td>
						</tr>
					</table>
				</div>
				<form action="/blocks/cart_add" method="post" class="product-item">
				<?php foreach ($products as $product): ?>
				<div class="product-info col-lg-3 col-md-6 col-sm-6 col-xs-6 clearfix-right">
				<input type="hidden" name="block_id" value="<?= $block->id; ?>">
				
					<table>
						<tr>
							<td>
								<p><?= $product->name; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p><?= $product->weight; ?> мм.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><?= $product->average_density; ?> кг/м³</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><?= $product->size; ?> мм.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><?= $product->transcalency; ?> Вт/м0С</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><?= $product->water_absorption; ?>%</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><?= $product->pallets; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p><?= $product->frost_resistance; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p><?= $product->fire_resistance; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>130 руб.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>
									<input type="number" min="0" name="product_<?= $product->id; ?>" id="product_<?= $product->id; ?>">
								</p>
							</td>
						</tr>
					</table>
					</div>
				<?php endforeach; ?>
				<div class="clearfix"></div>
				<input type="submit" class="to-cart btn btn-warning" value="В корзину">
				</form>
				
			</div>
		</div>