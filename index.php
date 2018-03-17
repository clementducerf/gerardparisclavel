<?php get_header(); ?>

<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
$args = array( 'cat' => array(2), 'posts_per_page'=>-1);
$loop = new WP_Query( $args );
if ($loop->have_posts()):while ( $loop->have_posts() ) : $loop->the_post();
    ?>

<?php endwhile;
else :
    echo '<p>No content found</p>';

endif;
?>

<? get_footer(); ?>