<?php get_header(); ?>
<!-- open .initial-screen -->
<section class="initial-screen">
	<!-- open .contain -->
	<div class="contain">
		<h1><span>ЛЕЧЕБНЫЕ ГРЯЗИ И КОСМЕТИКА НА ИХ ОСНОВЕ</span></h1>
		<a href="#">открыть каталог</a>
	</div>
	<!-- close .contain -->
</section>
<!-- close .initial-screen -->

<!-- open .prodiucts -->
<?= do_shortcode('[category_list]') ?>
<!-- close .prodiucts -->

<!-- open .advantages -->
<section class="advantages">
	<!-- open .contain -->
	<div class="contain">
		<!-- open .advantages__item -->
		<div class="advantages__item">
			<img src="<?php bloginfo('template_directory'); ?>/img/adv1.png" alt="" />
			<p>Без химикатов</p>
		</div>
		<!-- close .advantages__item -->
		<!-- open .advantages__item -->
		<div class="advantages__item">
			<img src="<?php bloginfo('template_directory'); ?>/img/adv2.png" alt="" />
			<p>На основе натуральных ингредиентов</p>
		</div>
		<!-- close .advantages__item -->
		<!-- open .advantages__item -->
		<div class="advantages__item">
			<img src="<?php bloginfo('template_directory'); ?>/img/adv3.png" alt="" />
			<p>Долговременный эффект</p>
		</div>
		<!-- close .advantages__item -->
	</div>
	<!-- close .contain -->
</section>
<!-- close .advantages -->

<!-- open .reviews -->
<?= do_shortcode('[reviews]') ?>
<!-- close .reviews -->

<!-- open .video-reviews -->
<?= do_shortcode('[video-reviews]') ?>
<!-- close .video-reviews -->

<!-- open .about -->
<section class="about">
	<!-- open .contain -->
	<div class="contain">
		<h2><span>О КОСМЕТИКЕ КОМПАНИИ “ЛИК” </span></h2>
		<p>Все большую востребованность и популярность на Российском рынке медицинских и косметологических услуг приобретают  лечебные грязи и препараты на их основе. 
		Природное происхождение, отсутствие в их составе синтезированных химических соединений позволяют говорить о грязелечении как о безопасном, но вместе с тем высокоэффективном 
		способе лечения многих распространенных заболеваний. Область применения грязевых лечебных препаратов в медицинской и косметологической практике чрезвычайно широка.
		Прежде всего, лечебную грязь, отжимы лечебной грязи, гели с компонентами отжимов используют в качестве лечебного и восстановительного фактора здравницы и профильные 
		медицинские центры, санатории и госпиталя, кабинеты физиотерапии и косметологии лечебных учреждений.Безопасным и не менее эффективным методом лечения при выполнении 
		требований специалиста - врача является грязелечение в домашних условиях, на что ориентирована значительная часть больных людей пожилого возраста и ухаживающих за ребенком.</p>
		<p> Использование лечебной грязи - пелоида до недавнего времени было приоритетно в местах ее добычи, что значительно снижало потенциальную возможность оздоровления 
		широких масс населения нуждающегося в грязелечении. При этом неоспорим факт особого терапевтического воздействия на организм человека лечебных грязей в лечебных и 
		восстановительных целях, а так же профилактики ряда заболеваний. Многолетняя медицинская практика свидетельствует о поразительной результативности оздоровлении больных 
		при лечении заболеваний и травм опорно-двигательного аппарата,  неврологических, урологических, гинекологических и кожных болезней лечебными грязями и их производными. </p>
		<!-- open .about__form -->
		<article class="about__form">
			<h3>ПОДПИШИТЕСЬ НА НОВОСТИ КОМПАНИИ:<h3>
			<input type="text" class="about__form--inp" placeholder="Введите Email"/>
			<a href="#" class="about__form--btn">подписаться</a>
		</article>
		<!-- close .about__form -->
	</div>
	<!-- close .contain -->
</section>
<!-- close .about -->

<!-- open .documents -->
<section class="documents">
	<!-- open .block_title -->
	<h2 class="block_title"><span>ДОКУМЕНТЫ И СЕРТИФИКАТЫ</span></h2>
	<!-- close .block_title -->
	<!-- open .contain -->
	<div class="contain">
		<!-- open .documents__carousel -->
		<div class="documents__carousel">
			<!-- open .documents__carousel__item -->
			<div class="documents__carousel__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/sertificate1.jpg" alt="" />
			</div>
			<!-- close .documents__carousel__item -->
			<!-- open .documents__carousel__item -->
			<div class="documents__carousel__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/sertificate2.jpg" alt="" />
			</div>
			<!-- close .documents__carousel__item -->
			<!-- open .documents__carousel__item -->
			<div class="documents__carousel__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/sertificate3.jpg" alt="" />
			</div>
			<!-- close .documents__carousel__item -->
			<!-- open .documents__carousel__item -->
			<div class="documents__carousel__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/sertificate2.jpg" alt="" />
			</div>
			<!-- close .documents__carousel__item -->
		</div>
		<!-- close .documents__carousel -->
	</div>
	<!-- close .contain -->
</section>
<!-- close .documents -->

<!-- open .writetous -->
<section class="writetous">
	<!-- open .block_title -->
	<h2 class="block_title">
		У ВАС ОСТАЛИСЬ ВОПРОСЫ?<br />
		<span>НАПИШИТЕ НАМ ПРЯМО СЕЙЧАС:</span>
	</h2>
	<!-- close .block_title -->
	<!-- open .contain -->
	<div class="contain">
		<!-- open .writetous__box -->
		<div class="writetous__box">
			<!-- open .writetous__box--left -->
			<div class="writetous__box--left">
				<input type="text" class="writetous__box--inp writetous__box--inp--name" name="writetous__box--name"/ placeholder="Введите имя">
				<input type="text" class="writetous__box--inp writetous__box--inp--email" name="writetous__box--email" placeholder="Введите E-mail"/>
			</div>
			<!-- close .writetous__box--left -->
			<!-- open .writetous__box--right -->
			<div class="writetous__box--right">
				<textarea name="writetous__box--text" id="writetous__box--text" class="writetous__box--text" placeholder="Введите комментарий"></textarea>
				<a href="#" id="sendQuestion" class="writetous__box--btn">отправить</a>
			</div>
			<!-- close .writetous__box--right -->
		</div>
		<!-- close .writetous__box -->
	</div>
	<!-- close .contain -->
</section>
<!-- close .writetous -->

<!-- open .contacts -->
<section class="contacts">
	<!-- open .block_title -->
	<h2 class="block_title"><span>КОНТАКТЫ</span></h2>
	<!-- close .block_title -->
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
	<!-- close .contacts__map -->
</section>
<!-- close .contacts -->   

<?php get_footer(); ?>