<?php
\lib\helpers\Cookie::set('basket', '');
$order = new \models\Orders();
$order->find()->where(['number'=>$_GET['inv_id']])->one();
$order->confirm = 2;
$order->save();
?>
<?php get_header(); ?>
<!-- open .page-box -->
<div class="page-box">
    <!-- open .basket--head -->
    <div class="basket--head">
        <!-- open .block_title -->
        <h2 class="block_title"><span> Заказ оплачен </span></h2>
        <!-- close .block_title -->
    </div>
    <!-- open .contain -->
    <div class="contain">
        <!-- open .enter -->
            <h3>Ваш заказ успещно оплачен, номер заказа <?= $_GET['inv_id'] ?></h3>
        <!-- close .enter -->
    </div>
    <!-- close .contain -->
</div>
<!-- close .page-box -->
<?php get_footer(); ?>
