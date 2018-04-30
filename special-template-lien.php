<?php
/*
Template Name: Lien vers une autre page
*/

if(get_field('lien')){
    $location = "Location: ".get_field('lien');
    header($location);
} else{
    echo 'Aucun lien de redirection trouvé';
}

?>