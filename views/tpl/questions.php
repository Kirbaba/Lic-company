<?php if( $questions->have_posts() ): ?>
    <?php while ($questions->have_posts()) : $questions->the_post(); ?>
    <!-- open .questions__answer -->
    <div class="questions__answer">
        <!-- open .questions__answer--quest-text -->
        <div class="questions__answer--quest-text">
            <p><i><?= the_title(); ?></i></p>
        </div>
        <p><i><?php echo get_the_content(); ?></i></p>
        <!-- close .questions__answer--quest-text -->
    </div>
    <!-- close .questions__answer -->
    <?php endwhile ?>
<?php endif ?>
<?php wp_reset_query(); ?>