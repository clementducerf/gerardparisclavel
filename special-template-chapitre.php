<?php get_header();
/*
Template Name: Chapitre
*/
?>
<main class="videos">
    <?php
    $pageid = get_the_id();
    $content_post = get_post($pageid);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content;
    ?>
    <div id="bouton-retour">
        <a href="<?php echo home_url(); ?>">
            <img src="http://www.gerardparisclavel.fr/bnf/elements/main.png">
        </a>
    </div>
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
                <a href="">
                    <img src="img/video-001/001.png">
                </a>
                <a href="">
                    <img src="img/video-001/002.png">
                </a>
                <a href="">
                    <img src="img/video-001/003.png">
                </a>
                <a href="">
                    <img src="img/video-001/004.png">
                </a>
                <a href="">
                    <img src="img/video-001/005.png">
                </a>
                <a href="">
                    <img src="img/video-001/001.png">
                </a>
                <a href="">
                    <img src="img/video-001/002.png">
                </a>
                <a href="">
                    <img src="img/video-001/003.png">
                </a>
                <a href="">
                    <img src="img/video-001/004.png">
                </a>
                <a href="">
                    <img src="img/video-001/005.png">
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>