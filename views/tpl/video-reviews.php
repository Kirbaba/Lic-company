<?php if( $reviews->have_posts() ): ?>
<section class="video-reviews">
    <!-- open .block-title -->
    <h2 class="block_title"><span>ВИДЕО - ОТЗЫВЫ</span></h2>
    <!-- close .block-title -->
    <!-- open .contain -->
    <div class="contain">
        <!-- open .video-reviews__carousel -->
        <div class="video-reviews__carousel">
            <div class="swiper-wrapper">
                <!-- open .swiper-slide -->
                <?php while ($reviews->have_posts()) : $reviews->the_post(); ?>
                <div class="swiper-slide">
                    <iframe width="100%" height="100%" src="<?= the_title(); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php endwhile ?>
                <!-- close .swiper-slide -->

            </div>
            <!-- close .video-reviews__carousel -->
            <!-- Add Navigation -->
            <div class="swiper-button-prev-sec"></div>
            <div class="swiper-button-next-sec"></div>
        </div>
        <a href="#" class="reviews--more">перейти в каталог</a>
    </div>
    <!-- close .contain -->
</section>
<?php endif ?>
<?php wp_reset_query(); ?>