<?php get_header();
/*
Template Name: Image
*/
global $post;
$currentId = $post->ID;
$parentId = wp_get_post_parent_id( $currentId );
$parentUrl = get_page_link($parentId);
?>

<div id="header">
    <div id="bouton-legende"></div>
    <div id="bouton-retour">
        <?php
        echo '<a href="'.$parentUrl.'"><img src="http://www.gerardparisclavel.fr/bnf/elements/main.png"></a>';
        ?>
    </div>
</div>

<main class="images">
    <div id="content">
        <div id="slider">
            <ul>
                <li>
                    <div class="diapositive">
                        <div class="description-principale">
                            <span class="titre"><?php echo get_the_title($currentId); ?></span>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                    the_content();
                                endwhile; else: ?>
                                    <p>Sorry, no posts matched your criteria.</p>
                                <?php endif; ?>
                            </div>

                        <div class="container-image">
                            <?php
                            $currentThumbnailUrl = get_the_post_thumbnail_url($currentId, 'large');
                            echo '<img alt="Jetons de présence, par Gérard Paris-Clavel" class="W" src="'.$currentThumbnailUrl.'" />';
                            ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <?php
    if (has_children()){
        echo 'cette page a un enfant';

        $children = get_page_children( $currentId, $pages );

        echo var_dump(children);
    }
    else{
        echo "pas d'enfant";
    }
    ?>
    <a href="jetons-de-presence-galerie.php" class="lien-galerie"></a>

</main>


<?php get_footer(); ?>
