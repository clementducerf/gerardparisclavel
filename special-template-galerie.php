<?php get_header();
/*
Template Name: Galerie
*/
global $post;
$currentId = $post->ID;
$parentId = wp_get_post_parent_id( $currentId );
$parentUrl = get_page_link($parentId);
$currentSlide = 0;
$totalSlides = 0;

 if( have_rows('contenu_diaporama') ){
     while( have_rows('contenu_diaporama') ): the_row();
        $totalSlides++;
     endwhile;
 }

?>

<!--//CONTENU-->
<div id="bouton-retour">
    <?php
    echo '<a href="'.$parentUrl.'"><img src="http://www.gerardparisclavel.fr/bnf/elements/main-blanche.png"></a>';
    ?>
</div>

<div id="content" class="galerie">
    <div id="slider">
        <ul class="main-carousel">

            <?php if( have_rows('contenu_diaporama') ): ?>

                <?php while( have_rows('contenu_diaporama') ): the_row();
                    $img_images = get_sub_field('image_du_diaporama');
                    $img_titre = get_sub_field('legende_du_diaporama');

                    ?><li class="carousel-cell">

                    <div class="legende-galerie">
                        <?php echo $img_titre; ?>
                    </div>

                    <div class="container-image">
                        <img src="<?php echo $img_images['url']; ?>"/>
                        <div class="compteur"><?php echo ++$currentSlide.'/'.$totalSlides; ?></div>
                    </div>


            </li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>

    <span id="prevBtn"><a href=""></a></span>
    <span id="nextBtn"><a href=""></a></span>
</div>




<?php get_footer(); ?>