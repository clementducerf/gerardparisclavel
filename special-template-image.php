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
    <div id="bouton-retour">
        <?php
        echo '<a href="'.$parentUrl.'"><img src="http://www.gerardparisclavel.fr/bnf/elements/main-noire.png"></a>';
        ?>
    </div>
</div>


<div id="content">
    <div class="image">
        <?php
        $currentThumbnailUrl = get_the_post_thumbnail_url($currentId, 'large');
        echo '<img src="'.$currentThumbnailUrl.'" />';
        ?>
    </div>

    <div class="description">
        <h2 class="titre"><?php echo get_the_title($currentId); ?></h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>

</div>

<?php
if (has_children()){
    $children = get_pages(array('child_of' => $currentId));
    $childrenId = $children[0]->ID;
    $childUrl =  get_permalink($childrenId);

    echo '<a href="'.$childUrl.'" class="lien-galerie"></a>';
}?>


<?php get_footer(); ?>
