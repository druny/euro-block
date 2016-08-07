<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- <h1><?= $block->name; ?></h1>
<form action="/blocks/cart_add" method="post">
    TODO: Add other information about each block
    <input type="hidden" name="block_id" value="<?= $block->id; ?>">
    <?php foreach ($products as $product): ?>
        <div class="form-group">
            <label for="product_<?= $product->id; ?>"> <?= $product->name; ?></label>
            <input type="number" min="0" name="product_<?= $product->id; ?>" id="product_<?= $product->id; ?>">
        </div>
    <?php endforeach; ?>
    <input type="submit" value="В корзину">
</form> -->


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
				<?php foreach ($products as $product): ?>
				<div class="product-info col-lg-3 col-md-6 col-sm-6 col-xs-6 clearfix-right">
				<form action="/blocks/cart_add" method="post">
				<input type="hidden" name="block_id" value="<?= $block->id; ?>">
				
					<table>
						<tr>
							<td>
								<p><?= $product->name; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p>~21 кг.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>1000 кг/м³</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>190×288×188 мм.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>0,085 Вт/м0С</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>8.79%</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>72</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>F35</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>-</p>
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
				<input type="submit" value="В корзину">
				</form>
				</div>
				<?php endforeach; ?>
				
			</div>
		</div>