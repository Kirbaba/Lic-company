<!-- open .footer -->
<footer class="footer">
	<!-- open .contain -->
<div class="contain">
	<!-- open .header__logo -->
	<div class="header__logo">
		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" /></a>
	</div>
	<!-- close .header__logo -->
	<!-- open .header__info -->
	<div class="header__info">
		<!-- open .footer--links -->
		<div class="footer--links">
			<a href="#">Политика конфиденциальности  </a>
			<a href="/contacts/">Реквизиты</a>
			<p>Разработанно маркетологами Expert Convertion</p>
		</div>
		<!-- close .footer--links -->
		<!-- open .header__info--contacts -->
		<div class="header__info--contacts">
			<p class="phone-number">Звоните:<br><?= get_theme_mod('phone_textbox') ?></p>
			<a href="#" class="header__info--contacts--phoneme">Заказать звонок</a>
			<p><?= get_theme_mod('mail_textbox') ?></p>
		</div>
		<!-- close .header__info--contacts -->
	</div>
	<!-- close .header__info -->
</div>
<!-- close .contain -->
</footer>
<!-- close .footer -->

<?php wp_footer(); ?>
</body>
</html>