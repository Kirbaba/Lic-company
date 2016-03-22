<?php get_header(); ?>
	<!-- open .page-box -->
	<div class="page-box">
		<!-- open .basket--head -->
		<div class="basket--head">
			<!-- open .block_title -->
			<h2 class="block_title"><span>Вход</span></h2>
			<!-- close .block_title -->
		</div>
		<!-- open .contain -->
		<div class="contain">
			<?php if(isset($_GET['status'])): ?>
				<?php if($_GET['status'] == 1): ?>
					<div class="enter">
						<h3>Вы успешно зарегистрированы!</h3>
					</div>
				<?php endif ?>
				<?php if($_GET['status'] == 2): ?>
					<div class="enter">
						<h3>Такой пользователь уже существует!</h3>
					</div>
				<?php endif; ?>
			<?php endif ?>
			<!-- open .enter -->
			<div class="enter">
				<input type="text" name="enter--email" class="enter--inp" placeholder="Введите E-mail " />
				<input type="password" name="enter--password" class="enter--inp" placeholder="Введите пароль "/>
				<a href="#" id="enter" class="enter--but">войти</a>
				<a href="/registration/" class="enter-reg-link">регистрация</a>
			</div>
			<!-- close .enter -->
		</div>
		<!-- close .contain -->
	</div>
	<!-- close .page-box -->


<?php get_footer(); ?>
