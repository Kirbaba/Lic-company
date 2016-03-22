<div class="admin-order-box">
    <table class="table table-bordered">
        <tr>
            <th>Номер заказа</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Email</th>
            <th>Товары</th>
            <th>Статус</th>
            <th>Дата</th>
            <th>Удалить</th>
        </tr>
        <?php foreach ($orders as $o): ?>
            <tr>
                <td><?= $o['number'] ?></td>
                <td><?= $o['name'] ?></td>
                <td><?= $o['phone'] ?></td>
                <td><?= $o['email'] ?></td>
                <td>
                    <?php
                    $arr = json_decode($o['products'], true, 4);
                    foreach ($arr as $k => $prod) {
                        $priceProd = 0;
                        $countProd = 0;
                        foreach ($prod as $p) {
                            $priceProd += $p['count'] * $p['price'];
                            $countProd += $p['count'];
                        }
                        echo $prod[0]['title'] . " - " . $countProd . " шт.<br>";
                    }
                    ?>
                </td>
                <td><?= $o['confirm'] == 1 ? 'Не оплачен' : 'Оплачен' ?></td>
                <td><?= date('Y:m:d', $o['dt_add']) ?></td>
                <td><a href="/wp-admin/admin.php?page=orders&del=<?= $o['id'] ?>">Удалить</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>