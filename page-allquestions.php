<?php get_header(); ?>
	<!-- open .single-page__wrap -->
	<div class="questions">
		<!-- open .contain -->
		<div class="contain">
			<!-- open .questions__search -->
			<div class="questions__search">
				<input type="submit" class="questions__search--but" value="" />
				<input type="text" placeholder="Поиск" class="questions__search--input"/>				
			</div>
			<!-- close .questions__search -->

			<!-- open .questions__add -->
			<div class="questions__add">
				<input type="text" class="questions__add--input" placeholder="Вопрос"  />
				<input id="askQuestion" type="submit" class="questions__add--but"  value="задать вопрос" />
			</div>
			<!-- close .questions__add -->
			
			<?= do_shortcode('[questions]') ?>

		</div>
		<!-- close .contain -->
	</div>
	<!-- close .single-page__wrap -->
<?php get_footer(); ?>