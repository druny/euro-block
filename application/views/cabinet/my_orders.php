<div class="container">
    <div class="order-info  flow  col-xs-12">
                <div class="admin-btn col-sm-4 col-xs-12">
                    <a href="/cabinet">
                        <img src="/img/menu-icon.png" alt="all orders">
                        <p>Все заказы</p>
                    </a>
                 </div>
                <div class="admin-btn col-sm-4 col-xs-12">
                    <a href="">
                        <img src="/img/active.png" alt="active">
                        <p>Мои заказы</p>
                     </a>
                </div>
                <div class="admin-btn col-sm-4 col-xs-12">
                    <a href="/cabinet/archive">
                        <img src="/img/arhive.png" alt="active">
                        <p>История заказов</p>
                    </a>
                 </div>
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
                                <a class="cabinet-btn btn btn-warning" href="/cabinet/take_task/<?= $order['id']; ?>" >
                                    Открыть задание
                                </a>
                        </td>
                    </tr>
                </table>
                <?php endforeach; ?>
                

            </div>
            <div class="clearfix"></div>
            <?=$this->pagination->create_links(); ?>
</div>