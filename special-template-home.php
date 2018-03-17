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
                </li>
                <li>
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
            $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));

            global $post;
            $currentid = $post->ID;

            $portfolio_children = get_page_children( $currentid, $all_wp_pages );

            // echo what we get back from WP to the browser
            echo '<pre>' . print_r( $portfolio_children, true ) . '</pre>';
            //echo json_encode($page);
            ?>


            <a href="page-video01.html"><img src="img/hp/001.jpg"></a>
            <a href="page-video04.html"><img src="img/hp/004.jpg"></a>
            <a href="page-video07.html"><img src="img/hp/007.jpg"></a>
            <a href="page-video02.html"><img src="img/hp/002.jpg"></a>
            <a href="page-video05.html"><img src="img/hp/005.jpg"></a>
            <a href="page-video08.html"><img src="img/hp/008.jpg"></a>
            <a href="page-video03.html"><img src="img/hp/003.jpg"></a>
            <a href="page-video06.html"><img src="img/hp/006.jpg"></a>
            <a href="page-video09.html"><img src="img/hp/009.jpg"></a>
        </div>
    </section>
</main>

<? get_footer(); ?>
