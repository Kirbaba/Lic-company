<?php use lib\helpers\Cookie;

get_header(); ?>
	
	<!-- open .page-box -->
	<div class="page-box basket">
		<!-- open .basket--head -->
		<div class="basket--head">
			<!-- open .block_title -->
			<h2 class="block_title"><span>Корзина</span></h2>
			<!-- close .block_title -->
		</div>
		<?php if(Cookie::get('basket')): ?>
		<!-- close .basket--head -->
		<!-- open .contain -->
		<div class="contain">
			<!-- open .basket__box -->
			<div class="basket__box">
				<!-- open .basket__box--head -->
				<div class="basket__box--head">
					<p class="basket__box--info--name">Наименование</p>
					<p class="basket__box--info--count">Кол-во  </p>
					<p class="basket__box--info--price">Стоимость</p>
					<p class="basket__box--info--sum">Сумма</p>
				</div>
				<!-- close .basket__box--head -->
				<?php
				$arr = json_decode(stripslashes(Cookie::get('basket')), true, 4);
				foreach($arr as $k => $prod):
					$priceProd = 0;
					$countProd = 0;
					foreach($prod as $p){
						$priceProd += $p['count'] * $p['price'];
						$countProd += $p['count'];
					}
				?>
				<!-- open .basket__box--line -->
				<div class="basket__box--line">
					<!-- open .basket__box--thumb -->
					<div class="basket__box--thumb">
						<img src="<?= wp_get_attachment_image_url(get_post_thumbnail_id($k)) ?>" alt="" />
					</div>
					<!-- close .basket__box--thumb -->
					<!-- open .basket__box--info -->
					<div class="basket__box--info">
						<!-- open .basket__box--info--name -->
						<div class="basket__box--info--name"><?= $prod[0]['title'] ?></div>
						<!-- close .basket__box--info--name -->
						<!-- open .basket__box--info--count -->
						<div class="basket__box--info--count"><?= $countProd ?></div>
						<!-- close .basket__box--info--count -->
						<!-- open .basket__box--info--price -->
						<div class="basket__box--info--price"><?= $prod[0]['price'] ?></div>
						<!-- close .basket__box--info--price -->
						<!-- open .basket__box--info--sum -->
						<div class="basket__box--info--sum"><?= $priceProd ?></div>
						<!-- close .basket__box--info--sum -->
					</div>
					<!-- close .basket__box--info -->
					<a href="#" post_id="<?= $k ?>" id="del_from_basket" class="basket__box--del-but">удалить</a>
				</div>
				<!-- close .basket__box--line -->
				<?php endforeach; ?>

				<!-- open .basket__box--total -->
				<div class="basket__box--total">
					<p>Итого:</p>
					<p><?= get_basket_price() ?></p>
					<a href="#" class="basket__box--total--order">оформить заказ</a>
				</div>
				<!-- close .basket__box--total -->
			</div>
			<!-- close .basket__box -->
			<?php endif ?>
		</div>
		<!-- close .contain -->
	</div>
	<!-- close .page-box -->
<?php get_footer(); ?>