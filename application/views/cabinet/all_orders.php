<div class="container">
	<div class="order-info  flow  col-xs-12">
				<h4><a href="/cabinet/all_orders">Все заказы</a></h4>
				<h4><a href="/cabinet/my_orders">Мои заказы</a></h4>
				<h4><a href="/cabinet/archive">Архив заказов</a></h4>
				<?php foreach($orders as $order): ?>
				<table class="table-order orders-space">
					<tr>
						<td>
							<p>id: <?= $order['id'] ?></p>
						</td>
						<td>
							<p><?= $order['first_name'] . ' ' . $order['last_name']; ?></p>
						</td>
						<td>
							<p>Город: <?= $order['city']; ?> </p>
						</td>
						<td>
							<p>Сумма: <?= $order['sum'] ?></p>
						</td>
						<td>
							<p>Время заказа: <?= $order['order_date'] ?></p>
						</td>
						<td>
								<a href="/cabinet/task/<?= $order['id']; ?>" class="btn btn-warning">
									Открыть
								</a>
						</td>
					</tr>
				</table>
				<?php endforeach; ?>
				

			</div>
			<div class="clearfix"></div>
			<?=$this->pagination->create_links(); ?>
</div>