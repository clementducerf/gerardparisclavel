<?php get_header();
/*
Template Name: Chapitre
*/
?>
    <div id="bouton-retour">
        <a href="<?php echo home_url(); ?>">
            <img src="http://www.gerardparisclavel.fr/bnf/elements/main.png">
        </a>
    </div>
<main class="videos">
    <?php /*
    $pageid = get_the_id();
    $content_post = get_post($pageid);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content; */
    ?>
    <section id="video">
        <div class="videoContainer">
            <div class="videoWrapper">
                <iframe src="https://player.vimeo.com/video/<?php if(get_field('vimeo_id')){ echo get_field('vimeo_id');} ?>?badge=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <section id="liens">
        <div class="linkWrapper">
            <div class="linkOverflow">
                <?php
                // Set up the objects needed
                $my_wp_query = new WP_Query();
                global $post;
                $currentid = $post->ID;
                $child_pages_args = $my_wp_query->query(array('post_parent' => $currentid,'post_type' => 'page', 'posts_per_page' => '-1','order' => 'ASC','orderby'=>'menu_order'));

                $page_childrens = get_page_children( $currentid, $child_pages_args );

                foreach ($page_childrens as $child_page){
                    $currentThumbnailUrl = get_the_post_thumbnail_url($child_page->{'ID'}, 'links');
                    $currentPageUrl = get_page_link($child_page->{'ID'});
                    echo '<a href="'.$currentPageUrl.'"><img src="'.$currentThumbnailUrl.'"></a>';
                }
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>