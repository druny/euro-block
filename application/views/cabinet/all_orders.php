<div class="container">
	<div class="order-info  flow  col-xs-12">
				<h4>Все заказы</h4>
				<?php foreach($orders as $order): ?>
				<table class="table-order orders-space">
					<tr>
						<td>
							<p>id: <?= $order['id'] ?></p>
						</td>
						<td>
							<p><?= $order['block_name']; ?> <?= $order['name']; ?></p>
						</td>
						<td>
							<p>Компания: <?= $order['company']; ?> </p>
						</td>
						<td>
							<p>Сумма: <?= $order['sum'] ?></p>
						</td>
						<td>
							<p>Кол-во: <?= $order['amount']; ?></p>
						</td>
						<td>
							<a href="#!">
								<button class="btn btn-warning">
									Взять задание
								</button>
							</a>
						</td>
					</tr>
				</table>
				<?php endforeach; ?>
				

			</div>
			<div class="clearfix"></div>
</div>