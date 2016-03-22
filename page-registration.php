<?php get_header(); ?>
	<!-- open .page-box -->
	<div class="page-box">
		<!-- open .basket--head -->
		<div class="basket--head">
			<!-- open .block_title -->
			<h2 class="block_title"><span>Регистрация</span></h2>
			<!-- close .block_title -->
		</div>
		<!-- open .contain -->
		<div class="contain">	
			<!-- open .enter -->
			<div class="enter">
				<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" id="regForm">
					<input type="text" name="name" class="enter--inp" placeholder="ФИО" />
					<input type="tel" name="phone" class="enter--inp" placeholder="Телефон" />
					<input type="text" name="login" class="enter--inp" placeholder="Логин" />
					<input type="email" name="email" class="enter--inp" placeholder="E-mail " />
					<input type="password" name="pass" class="enter--inp" placeholder="Пароль " />
					<input type="hidden" name="action" value="reg">
				</form>
				<a href="#" onclick="$('#regForm').submit();" class="registration--but">зарегистрироваться</a>
			</div>
			<!-- close .enter -->
		</div>
		<!-- close .contain -->
	</div>
	<!-- close .page-box -->


<?php get_footer(); ?>
