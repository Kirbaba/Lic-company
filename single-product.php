<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- open .page-box -->
<section class="page-box">
	<!-- open .contain -->
	<div class="contain">
		<?php if ( has_post_thumbnail() ): ?>
		<!-- open .single__thumb -->
		<div class="single__thumb">
			<?php the_post_thumbnail(); ?>
		</div>
		<!-- close .single__thumb -->
		<?php endif;?>
		<!-- open .single__desc -->
		<div class="single__desc">
			<h3><?php the_title(); ?></h3>
			<!-- open .single__desc--info -->
			<div class="single__desc--info">
				<p><?=get_extended( $post->post_content )['main']; ?></p>
				<!-- open .goods__item--price -->
					<div class="goods__item--price">
						<h4><?= get_post_meta($post->ID, 'price', true) ?></h4>
						<div class="goods__item--pricebox">							
							<p>1 шт.</p>
							<!-- open .goods__item--pricebox--controls -->
							<div class="goods__item--pricebox--controls">
								<a href="#" class="minus">+</a>
								<a href="#" class="plus">-</a>
							</div>
							<!-- close .goods__item--pricebox--controls -->
							
						</div>
					</div>
					<!-- close .goods__item--price -->
					<a href="#" class="goods__item--tobasket--single">добавить в корзину</a>
			</div>
			<!-- close .single__desc--info -->
		</div>
		<!-- close .single__desc -->
		<!-- open .single__fulldesc -->
		<div class="single__fulldesc">
			<h3><span>Полное описание</span></h3>
			<p><?php the_content(); ?></p>
		</div>
		<!-- close .single__fulldesc -->
	</div>
	<!-- close .contain -->
	
</section>
<!-- close .page-box -->
<?php endwhile; ?>
<?php endif;?>
<?php get_footer(); ?>