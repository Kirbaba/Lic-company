﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">    
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
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
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" />
		</div>
		<!-- close .header__logo -->
		<!-- open .header__info -->
		<div class="header__info">
			<a href="#" class="header__info--enter">Войти</a>
			<a href="#" class="header__info--basket">Корзина<br/>Сумма: 0 р </a>
			<!-- open .header__info--contacts -->
			<div class="header__info--contacts">
				<p class="phone-number">Звоните:<br>8 (495) 734-50-03</p>
				<a href="#" class="header__info--contacts--phoneme">Заказать звонок</a>
				<p>7345003@mail.ru</p>
			</div>
			<!-- close .header__info--contacts -->
		</div>
		<!-- close .header__info -->
	</div>
	<!-- close .contain -->
	
</header>
<!-- close .header -->
    
<?php wp_footer(); ?>
</body>
</html>