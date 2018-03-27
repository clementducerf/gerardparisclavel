<?php get_header();
/*
Template Name: Home
*/
?>
<main class="homepage">
    <section id="introduction">
        <nav>
            <ul>
                <li>
                    <a href="http://www.gerardparisclavel.fr/bonjour/">
                        <img src="<?php echo get_template_directory_uri().'/img/boutons/blog.gif' ?>" alt="Blog">
                    </a>
            </li><li>
                <a href="http://www.gerardparisclavel.fr/bnf/">
                    <img src="<?php echo get_template_directory_uri().'/img/boutons/BNF.gif' ?>" alt="Expo BNF 2016">
                </a>
            </li>
            </ul>
            </nav>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="image-introduction">
                <img src="<?php echo $image[0]; ?>" alt="Avec Gérard Paris-Clavel">
            </div>
        <?php endif; ?>

        <div class="txt-introduction">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        </div>
        
    </section>

    <section id="images">
        <div class="neuf-images">
            <?php
            // Set up the objects needed
            $my_wp_query = new WP_Query();
            global $post;
            $currentid = $post->ID;
            $video_pages = $my_wp_query->query(array('post_parent' => 0,'post_type' => 'page', 'posts_per_page' => '-1','order' => 'ASC','post__not_in' => array($currentid)));

            //$portfolio_childrens = get_page_children( $currentid, $video_pages );

            foreach ($video_pages as $video_page){
                $currentThumbnailUrl = get_the_post_thumbnail_url($video_page->{'ID'});
                $currentPageUrl = get_page_link($video_page->{'ID'});
                echo '<a href="'.$currentPageUrl.'"><img src="'.$currentThumbnailUrl.'"></a>';
            }
            ?>
        </div>
    </section>
</main>

<? get_footer(); ?>
