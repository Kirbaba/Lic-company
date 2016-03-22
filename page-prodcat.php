<?php get_header(); ?>
    <?= do_shortcode('[category_list]') ?>
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
<?php get_footer(); ?>