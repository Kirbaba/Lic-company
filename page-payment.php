<?php use lib\helpers\Cookie;

get_header(); ?>
<?php
// регистрационная информация (логин, пароль #1)
// registration info (login, password #1)
$mrh_login = "lic";
$mrh_pass1 = "123qwerty";

// номер заказа
// number of order
$inv_id = $_GET['n'];

// описание заказа
// order description
$inv_desc = "Оплата заказа №$inv_id";

// сумма заказа
// sum of order
$out_summ = $_GET['sum'];

// тип товара
// code of goods
$shp_item = 1;

// язык
// language
$culture = "ru";

// кодировка
// encoding
$encoding = "utf-8";

// формирование подписи
// generate signature
$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:shp_Item=$shp_item");

// HTML-страница с кассой
// ROBOKASSA HTML-pag



?>
    <!-- open .page-box -->
    <div class="page-box">
        <!-- open .basket--head -->
        <div class="basket--head">
            <!-- open .block_title -->
            <h2 class="block_title"><span>Оплата заказа</span></h2>
            <!-- close .block_title -->
        </div>
        <!-- open .contain -->
        <div class="contain">
            <!-- open .enter -->
            <div class="payment-box">
                <p>Сумма к оплате: <?= get_basket_price() ?></p>
                <?php
                print "<html><script language=JavaScript ".
                    "src='https://auth.robokassa.ru/Merchant/PaymentForm/FormMS.js?".
                    "MerchantLogin=$mrh_login&OutSum=$out_summ&InvoiceID=$inv_id".
                    "&Description=$inv_desc&SignatureValue=$crc&shp_Item=$shp_item".
                    "&Culture=$culture&Encoding=$encoding&IsTest=1'></script></html>";
                ?>
            </div>
            <!-- close .enter -->
        </div>
        <!-- close .contain -->
    </div>
    <!-- close .page-box -->


<?php get_footer(); ?>