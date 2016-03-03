<?php if( $reviews->have_posts() ): ?>
    <section class="reviews">
    <!-- open .block-title -->
    <h2 class="block_title"><span>ОТЗЫВЫ КЛИЕНТОВ</span></h2>
    <!-- close .block-title -->
    <!-- open .contain -->
    <div class="contain">
        <div class="reviews__carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">
                <?php while ($reviews->have_posts()) : $reviews->the_post(); ?>
                <div class="swiper-slide reviews__carousel--item">
                    <!-- open .reviews__carousel--item--user -->
                    <div class="reviews__carousel--item--user">
                        <!-- open .reviews__carousel--item--img -->
                        <div class="reviews__carousel--item--img">
                            <?php the_post_thumbnail();?>
                        </div>
                        <!-- close .reviews__carousel--item--img -->
                        <p><?= the_title(); ?></p>
                    </div>
                    <!-- close .reviews__carousel--item--user -->
                    <!-- open .reviews__carousel--item--text -->
                    <div class="reviews__carousel--item--text">
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                    <!-- close .reviews__carousel--item--text -->
                </div>
                <?php endwhile ?>
            </div>
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <a href="#" class="reviews--more">получить консультацию</a>
    </div>
    <!-- close .contain -->
</section>
<?php endif ?>
<?php wp_reset_query(); ?>
