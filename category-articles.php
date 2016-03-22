<?php get_header(); ?>

    <!--<div class="questions">
        <div class="contain">
            <?php /*if (have_posts()) : while (have_posts()) : the_post(); */?>
                <div class="questions__answer" style="width: 100%">
                    <div class="questions__answer--quest-text">
                        <a href="<?/*= $post->guid */?>"><p><i><?php /*the_title(); */?></i></p></a>
                    </div>
                    <p><i><?php /*the_content(); */?></i></p>
                </div>
            <?php /*endwhile; */?>
            <?php /*endif; */?>
        </div>
    </div>-->

    <section class="page-box p-top-50">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="contain p-top-50">
                <?php if ( has_post_thumbnail() ): ?>
                    <!-- open .single__thumb -->
                    <div class="single__thumb">
                        <a href="<?= $post->guid ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <!-- close .single__thumb -->
                <?php endif;?>
                <!-- open .single__desc -->
                <div class="single__desc">
                    <h3><a href="<?= $post->guid ?>"><p><i><?php the_title(); ?></i></p></a></h3>
                    <!-- open .single__desc--info -->
                    <div class="single__desc--info">
                        <?php the_content(); ?>
                    </div>
                    <!-- close .single__desc--info -->
                </div>
                <!-- close .single__desc -->
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="contain p-top-50">
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
    </section>

<?php get_footer(); ?>