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
$sizes = array(10.906789786223,
    9.3650781472684,
    10.398352969121,
    12.64531567696,
    8.5778211401425,
    10.562364845606,
    10.447556532067,
    11.808855106888,
    10.906789786223,
    3.6471673994529,
    7.4361690866624,
    6.2508396818402,
    6.1799225379619,
    6.1799225379619,
    6.0380882502054,
    5.7341576335843,
    5.6632404897061,
    5.7240266130303,
    3.677560461115,
    5.0047241536937,
    5.075641297572,
    5.8861229418949,
    4.781841701505,
    6.0380882502054,
    7.6489205182971,
    7.2842037783518,
    5.6835025308141,
    4.3968629204516,
    5.1161653797881,
    5.085772318126,
    5.1870825236664,
    3.7383465844393,
    4.9034139481534,
    6.4331980518128,
    6.6256874423395,
    3.1304853511971,
    7.6387894977431,
    4.8730208864913,
    7.1119764289332,
    7.0309282645009,
    3.2621886183996,
    3.3634988239399,
    7.2031556139195,
    3.2621886183996,
    4.1638494477088,
    5.0666311699578,
    2.1349009677567,
    3.4053173887105,
    2.4882120434066,
    3.8939390890774,
    4.9689068298845,
    3.9916634291508,
    4.1344913107965,
    5.600356411897,
    5.3673214471067,
    2.6911779804821,
    4.1645603385113,
    5.7507015504714,
    4.630630268092,
    2.58593638348,
    5.8484258905448,
    5.1418037392451);
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

                //$currentSize = getimagesize($baseurl.'/etagere/A-'.$i.'.jpg');
                //$baseSmallSize = $currentSize[1]*0.164011876484561;
                //$remSize = $baseSmallSize/10;
                //echo $baseSmallSize;
                echo '<a class="livres" href="'.$counterUrl[$counterLinks].'"><img src="'.$baseurl.'/etagere/A-'.$i.'.jpg" alt="" style="height: '.$sizes[$counterLinks].'em;"></a>';
                //echo $remSize."\n";
                //var_dump($currentSize[0]);
                $counterLinks++;
            }
            ?>
        </div>
        <div class="rangee">
            <?php

            for ($i = 1; $i <= 18; $i++) {
                //$currentSize = getimagesize($baseurl.'/etagere/B-'.$i.'.jpg');
                //$baseSmallSize = $currentSize[1]*0.164011876484561;
                //$remSize = (($baseSmallSize/10)*61.770042335864525)/100;
                echo '<a class="livres" href="'.$counterUrl[$counterLinks].'"><img src="'.$baseurl.'/etagere/B-'.$i.'.jpg" alt="" style="height: '.$sizes[$counterLinks].'em;"></a>';
                //echo $remSize."\n";
                $counterLinks++;
            }
            ?>
        </div>
        <div class="rangee">
            <?php
            for ($i = 1; $i <= 18; $i++) {
                //$currentSize = getimagesize($baseurl.'/etagere/C-'.$i.'.jpg');
                //$baseSmallSize = $currentSize[1]*0.164011876484561;
                //$remSize = (($baseSmallSize/10)*61.770042335864525)/100;
                echo '<a class="livres" href="'.$counterUrl[$counterLinks].'"><img src="'.$baseurl.'/etagere/C-'.$i.'.jpg" alt="" style="height: '.$sizes[$counterLinks].'em;"></a>';
                //echo $remSize."\n";
                $counterLinks++;
            }
            ?>
        </div>
        <div class="rangee">
            <?php
            for ($i = 1; $i <= 17; $i++) {
                //$currentSize = getimagesize($baseurl.'/etagere/D-'.$i.'.jpg');
                //$baseSmallSize = $currentSize[1]*0.164011876484561;
                //$remSize = (($baseSmallSize/10)*45.833613332437336)/100;
                echo '<a class="livres" href="'.$counterUrl[$counterLinks].'"><img src="'.$baseurl.'/etagere/D-'.$i.'.jpg" alt="" style="height: '.$sizes[$counterLinks].'em;"></a>';
                //echo $remSize."\n";

                $counterLinks++;
            }
            ?>
        </div>
    </div>
</div>
<div class="top">

</div>

<?php get_footer(); ?>
