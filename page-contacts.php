<?php get_header(); ?>
	<!-- open .page-box -->
	<div class="page-box">
		<!-- open .basket--head -->
		<div class="basket--head">
			<!-- open .block_title -->
			<h2 class="block_title"><span>КОНТАКТЫ И РЕКВИЗИТЫ</span></h2>
			<!-- close .block_title -->
		</div>
		<!-- open .contain -->
		<!-- open .contacts__map -->
		<article class="contacts__map">
			<div id="map" style="width:100%; height:100%"></div>
			<!-- open .contacts__info -->
			<div class="contacts__info">
				<p><i class="contacts--phone-icon"></i><span><?= get_theme_mod('phone_textbox') ?></span></p>
				<p><i class="contacts--mail-icon"></i><span><?= get_theme_mod('mail_textbox') ?></span></p>
				<p><i class="contacts--point-icon"></i><span>107150, г.Москва, ул. Ивантеевская, д.9</span></p>
				<p><i class="contacts--watch-icon"></i><span>с пн. - пт., с 10 до 17 часов, без обеда</span></p>
			</div>
			<!-- close .contacts__info -->
		</article>
		<!-- open .page-contacts--wrap -->
		<div class="page-contacts--wrap">
			<!-- open .container -->
			<div class="contain">
				<!-- open .page-contacts--box -->
				<div class="page-contacts--box">
					<p><b>ООО КОМПАНИЯ «ЛИК»</b>, свидетельство ОГРН № 1067760051369 от 23.11.2006 г. </p>
					<!-- open .page-contacts--table -->
					<div class="page-contacts--table">
						<p><span class="page-contacts--title">ИНН/КПП</span><?= get_theme_mod('inn_textbox') ?></p>
						<p><span class="page-contacts--title">Юридический адрес</span><?= get_theme_mod('u_address_textbox') ?></p>
						<p><span class="page-contacts--title">Фактический адрес </span><?= get_theme_mod('f_address_textbox') ?></p>
						<p><span class="page-contacts--title">Банковские реквизиты:</span><?= get_theme_mod('bank_textbox') ?></p>
						<p><span class="page-contacts--title">Расчетный счет (рублевый) </span><?= get_theme_mod('checking_account') ?></p>
						<p><span class="page-contacts--title">Кор. счет </span><?= get_theme_mod('kor_check') ?></p>
						<p><span class="page-contacts--title">БИК</span><?= get_theme_mod('bic') ?></p>
						<p><span class="page-contacts--title">ОКАТО </span><?= get_theme_mod('okato') ?></p>
					</div>
					<!-- close .page-contacts--table -->

				</div>
				<!-- close .page-contacts--box -->

				<!-- open .page-contacts--box -->
				<div class="page-contacts--box">
					<!-- open .page-contacts--leadership -->
					<div class="page-contacts--leadership">
						<p><b>Генеральный директор</b>Погорецкая Людмила  Александровна  </p>
						<p><b>Руководитель проекта</b>Погорецкий Игорь Александрович</p>
					</div>
					<!-- close .page-contacts--leadership -->
				</div>
				<!-- close .page-contacts--box -->
			</div>
			<!-- close .container -->
		</div>
		<!-- close .page-contacts--wrap -->
	</div>
	<!-- close .page-box -->


<?php get_footer(); ?>
