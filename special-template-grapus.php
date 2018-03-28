<?php get_header();
/*
Template Name: Page Grapus
*/
global $post;
$currentId = $post->ID;
$parentId = wp_get_post_parent_id( $currentId );
$parentUrl = get_page_link($parentId);
?>

<div id="header">
    <div id="bouton-retour">
       <a href="<?php echo home_url(); ?>"><img src="http://www.gerardparisclavel.fr/bnf/elements/main-noire.png"></a>
    </div>
</div>


<div id="content">
    <section id="video">
        <div class="videoContainer">
            <div class="videoWrapper">
                <iframe src="https://player.vimeo.com/video/258092918?badge=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>

    <div class="description-grapus">
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
