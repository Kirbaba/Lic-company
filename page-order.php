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
			<div class="order">
				<input type="text" name="order--name" class="enter--inp" placeholder="ФИО" />
				<input type="tel" name="order--pgone" class="enter--inp" placeholder="Телефон" />
				<input type="email" name="order--mail" class="enter--inp" placeholder="E-mail " />
				<input type="text" name="order--adress" class="enter--inp" placeholder="Адрес доставки " />
				
				<a href="#" class="enter--but">оплатить</a>
			</div>
			<!-- close .enter -->
		</div>
		<!-- close .contain -->
	</div>
	<!-- close .page-box -->


<?php get_footer(); ?>
