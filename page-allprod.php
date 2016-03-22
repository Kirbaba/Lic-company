<?php get_header(); ?>
<?php
$cat = new Category();
$cat->get_all_categories();
?>
<?php get_footer(); ?>