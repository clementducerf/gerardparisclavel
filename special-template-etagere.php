<?php get_header();
/*
Template Name: Etagere
*/
global $post;
$currentId = $post->ID;
$parentId = wp_get_post_parent_id( $currentId );
$parentUrl = get_page_link($parentId);
$counterLinks = 0;
$counterUrl = [];
?>

<div id="header">
    <div id="bouton-retour">
        <?php
        echo '<a href="'.$parentUrl.'"><img src="http://www.gerardparisclavel.fr/bnf/elements/main-noire.png"></a>';
        ?>
    </div>
</div>


<div id="content">
    <div class="etagere">
        <?php
        if (has_children()){
            // Set up the objects needed
            $my_wp_query = new WP_Query();
            $child_pages_args = $my_wp_query->query(array('post_parent' => $currentId,'post_type' => 'page', 'posts_per_page' => '-1','order' => 'ASC','orderby'=>'menu_order'));
            $childrens = get_page_children( $currentId, $child_pages_args );

            foreach ($childrens as $children){

                $childrenId = $children->ID;
                $childrenUrl =  get_permalink($childrenId);
                array_push($counterUrl, $childrenUrl);

                //$reelThumbnailUrl = get_the_post_thumbnail_url($childrenId, 'links');
                //$currentThumbnailUrl = wp_get_attachment_url( get_post_thumbnail_id($childrenId) );
                //$currentThumbnailUrl = wp_get_attachment_image_src( get_post_thumbnail_id( $childrenId ), 'full', false );

                //echo'<pre>'.$currentThumbnailUrl[0].'</pre>';
                //$currentSize = getimagesize($currentThumbnailUrl[0]);
                //$baseSmallSize = $currentSize[1]*0.164011876484561;
                //$remSize = (($baseSmallSize/13)*45.833613332437336)/100;

                //echo '<a class="livres" href="'.$childrenUrl.'">'.'<img src="'.$reelThumbnailUrl.'" style="height: '.$remSize.'em;" />'.'</a>';
            };
        }?>

        <div class="rangee">
            <?php
            $baseurl = wp_upload_dir()['baseurl'];
            for ($i = 1; $i <= 9; $i++) {

                $currentSize = getimagesize($baseurl.'/etagere/A-'.$i.'.jpg');
                $baseSmallSize = $currentSize[1]*0.164011876484561;
                $remSize = $baseSmallSize/10;
                //echo $baseSmallSize;
                echo '<a class="livres" href="'.$counterUrl[$counterLinks].'"><img src="'.$baseurl.'/etagere/A-'.$i.'.jpg" alt="" style="height: '.$remSize.'em;"></a>';
                //var_dump($currentSize[0]);
                $counterLinks++;
            }
            ?>
        </div>
        <div class="rangee">
            <?php

            for ($i = 1; $i <= 18; $i++) {
                $currentSize = getimagesize($baseurl.'/etagere/B-'.$i.'.jpg');
                $baseSmallSize = $currentSize[1]*0.164011876484561;
                $remSize = (($baseSmallSize/10)*61.770042335864525)/100;
                echo '<a class="livres" href="'.$counterUrl[$counterLinks].'"><img src="'.$baseurl.'/etagere/B-'.$i.'.jpg" alt="" style="height: '.$remSize.'em;"></a>';
                $counterLinks++;
            }
            ?>
        </div>
        <div class="rangee">
            <?php
            for ($i = 1; $i <= 18; $i++) {
                $currentSize = getimagesize($baseurl.'/etagere/C-'.$i.'.jpg');
                $baseSmallSize = $currentSize[1]*0.164011876484561;
                $remSize = (($baseSmallSize/10)*61.770042335864525)/100;
                echo '<a class="livres" href="'.$counterUrl[$counterLinks].'"><img src="'.$baseurl.'/etagere/C-'.$i.'.jpg" alt="" style="height: '.$remSize.'em;"></a>';
                $counterLinks++;
            }
            ?>
        </div>
        <div class="rangee">
            <?php
            for ($i = 1; $i <= 17; $i++) {
                $currentSize = getimagesize($baseurl.'/etagere/D-'.$i.'.jpg');
                $baseSmallSize = $currentSize[1]*0.164011876484561;
                $remSize = (($baseSmallSize/10)*45.833613332437336)/100;
                echo '<a class="livres" href="'.$counterUrl[$counterLinks].'"><img src="'.$baseurl.'/etagere/D-'.$i.'.jpg" alt="" style="height: '.$remSize.'em;"></a>';
                $counterLinks++;
            }
            ?>
        </div>
    </div>
</div>
<div class="top">

</div>

<?php get_footer(); ?>
