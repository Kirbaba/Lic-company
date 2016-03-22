<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- open .page-box -->
    <section class="page-box p-top-50">
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
                    <?php the_content(); ?>
                </div>
                <!-- close .single__desc--info -->
            </div>
            <!-- close .single__desc -->
            <div class="hren_images">
                <a download href="<?php bloginfo('template_directory'); ?>/img/s1.png">
                    <img src="<?php bloginfo('template_directory'); ?>/img/s1.png" alt="">
                </a>
                <a download href="<?php bloginfo('template_directory'); ?>/img/s2.png">
                    <img src="<?php bloginfo('template_directory'); ?>/img/s2.png" alt="">
                </a>
                <a download href="<?php bloginfo('template_directory'); ?>/img/s3.png">
                    <img src="<?php bloginfo('template_directory'); ?>/img/s3.png" alt="">
                </a>
                <a download href="<?php bloginfo('template_directory'); ?>/img/s4.png">
                    <img src="<?php bloginfo('template_directory'); ?>/img/s4.png" alt="">
                </a>
            </div>
        </div>
        <!-- close .contain -->
    </section>
    <!-- close .page-box -->
<?php endwhile; ?>
<?php endif;?>
<?php get_footer(); ?>