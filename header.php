<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">    
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />    
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<!-- open .header -->
<header class="header">
	<!-- open .contain -->
	<div class="contain">
		<!-- open .header__logo -->
		<div class="header__logo">
			<a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" /></a>
		</div>
		<!-- close .header__logo -->
		<!-- open .header__info -->
		<div class="header__info">
			<a href="#" class="header__info--enter">Войти</a>
			<a href="/basket/" class="header__info--basket">Корзина<br/>Сумма: <span id="basket_price"><?= get_basket_price() ?></span> р. </a>
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
	
</header>
<!-- close .header -->

<!-- open .navigation -->
<nav class="navigation">
	<!-- open .contain -->
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_class' => '',
		'container' => 'div',
		'container_class' => 'contain',
	));
	?>
	<!--<div class="contain">
		<ul>
			<li><a href="/">Главная</a></li>
			<li><a href="/prod/">Продукция</a></li>
			<li><a href="#">Статьи</a></li>
			<li><a href="/delivery/">Доставка и оплата</a></li>
			<li><a href="/questions/">Вопросы и ответы </a></li>
			<li><a href="#">Контакты</a></li>
		</ul>
	</div>-->
	<!-- close .contain -->	
</nav>
<!-- close .navigation -->