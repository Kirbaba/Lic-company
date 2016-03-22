<?php get_header(); ?>
	<!-- open .page-box -->
	<div class="page-box">
		<!-- open .basket--head -->
		<div class="basket--head">
			<!-- open .block_title -->
			<h2 class="block_title"><span>Оформление заказа</span></h2>
			<!-- close .block_title -->
		</div>
		<!-- open .contain -->
		<div class="contain">	
			<!-- open .enter -->
			<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" id="orderForm">
				<div class="order">
					<input type="text" name="name" class="enter--inp" placeholder="ФИО" />
					<input type="tel" name="phone" class="enter--inp" placeholder="Телефон" />
					<input type="email" name="email" class="enter--inp" placeholder="E-mail " />
					<input type="text" name="address" class="enter--inp" placeholder="Адрес доставки " />
					<input type="hidden" name="sum" value="<?= get_basket_price() ?>">
					<input type="hidden" name="action" value="order_pay">
					<input type="hidden" name="test" value="1">
					<a href="#" onclick="$('#orderForm').submit();return false" class="enter--but">оплатить</a>
				</div>
			</form>
			<!-- close .enter -->
		</div>
		<!-- close .contain -->
	</div>
	<!-- close .page-box -->


<?php get_footer(); ?>
