<?php get_header(); ?>
    <!-- open .single-page__wrap -->
    <div class="questions">
        <!-- open .contain -->
        <div class="contain">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="questions__answer" style="width: 100%">
                    <!-- open .questions__answer--quest-text -->
                    <div class="questions__answer--quest-text">
                        <p><i><?php the_title(); ?></i></p>
                    </div>
                    <p><i><?php the_content(); ?></i></p>
                    <!-- close .questions__answer--quest-text -->
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- close .contain -->
    </div>
    <!-- close .single-page__wrap -->
<?php get_footer(); ?>