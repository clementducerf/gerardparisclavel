<?php
/*
Template Name: Lien vers une autre page
*/

if(get_field('lien')){
    $location = "Location: ".get_field('lien');
    header("Status: 301 Moved Permanently", false, 301);
    header($location);
} else{
    echo 'Aucun lien de redirection trouvé';
}

?>