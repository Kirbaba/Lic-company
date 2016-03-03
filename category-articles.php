<?php get_header(); ?>

    <div class="questions">
        <div class="contain">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="questions__answer" style="width: 100%">
                    <!-- open .questions__answer--quest-text -->
                    <div class="questions__answer--quest-text">
                        <a href="<?= $post->guid ?>"><p><i><?php the_title(); ?></i></p></a>
                    </div>
                    <p><i><?php the_content(); ?></i></p>
                    <!-- close .questions__answer--quest-text -->
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>