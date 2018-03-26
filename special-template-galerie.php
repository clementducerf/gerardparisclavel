<?php get_header();
/*
Template Name: Galerie
*/
?>

<!--//COMPTEUR – Ne renseigner QUE la valeur "nb_images" ci-dessous : le reste est automatisé-->
<?php
$nb_images = 7;
$slide=0;
?>

<!--//CONTENU-->
<div id="bouton-retour"><a href="jetons-de-presence.php"><img src="elements/main-blanche.png"/></a></div>

<div id="content">

    <div id="slider">
        <ul>
            <li>
                <div class="diapositive">

                    <div class="description">

                        <p>
					   				<span class="legende-galerie">
							  			La Fenêtre expo, Ivry-sur-Seine, 2008
							  		</span>
                        </p>

                    </div>

                    <div class="container-image">
                        <p><span>
								<img
                                    alt="Jetons de présence, par Gérard Paris-Clavel"
                                    class="W"
                                    src="images/02-Jetons-de-presence/02.jpg"
                                /></span></p>

                    </div>

                    <div class="compteur">
                        <?php echo ++$slide;?>/<?php echo $nb_images;?>
                    </div>


                </div>
            </li>

            <li>
                <div class="diapositive">

                    <div class="description">

                        <p>
							  		<span class="legende-galerie">
							  			<a href="http://www.solidaires.org/article38861.html" target="_blank">
                                            Journal <I>Expressions Solidaires</I></a> n°53, 2011.
							  			Double page centrale à afficher
							  		</span>
                        </p>

                    </div>

                    <div class="container-image">
                        <img
                            alt="Jetons de présence, par Gérard Paris-Clavel"
                            class="H"
                            src="images/02-Jetons-de-presence/03.jpg"
                        />
                    </div>

                    <div class="compteur">
                        <?php echo ++$slide;?>/<?php echo $nb_images;?>
                    </div>

                </div>

            </li>
            <li>
                <div class="diapositive">

                    <div class="description">

                        <p>
							  		<span class="legende-galerie">
							  			<I>Pleins feux sur Ivry</I> à l’Atelier de l’Office Public de l'Habitat (OPH), 2013
							  		</span>
                        </p>

                    </div>

                    <div class="container-image">
                        <p><span>
								<img
                                    alt="Jetons de présence, par Gérard Paris-Clavel"
                                    class="W"
                                    src="images/02-Jetons-de-presence/04.jpg"
                                /></span></p>
                    </div>

                    <div class="compteur">
                        <?php echo ++$slide;?>/<?php echo $nb_images;?>
                    </div>


                </div>
            </li>
            <li>
                <div class="diapositive">

                    <div class="description">

                        <p>
							  		<span class="legende-galerie">
							  			Exposition avec Marc Pataut au Centre Régional
							  			de la photographie de Douchy-les-Mines, 2009.
							  			Photo&thinsp;: Marc Pataut
							  		</span>
                        </p>

                    </div>

                    <div class="container-image">
                        <p><span>
								<img
                                    alt="Jetons de présence, par Gérard Paris-Clavel"
                                    class="W"
                                    src="images/02-Jetons-de-presence/05.jpg"
                                /></span></p>
                    </div>

                    <div class="compteur">
                        <?php echo ++$slide;?>/<?php echo $nb_images;?>
                    </div>


                </div>
            </li>
            <li>
                <div class="diapositive">

                    <div class="description">

                        <p>
							  		<span class="legende-galerie">
							  			<I>Manière de voir</I> n°97, 2007
							  		</span>
                        </p>

                    </div>

                    <div class="container-image">
                        <p><span>
								<img
                                    alt="Jetons de présence, par Gérard Paris-Clavel"
                                    class="W"
                                    src="images/02-Jetons-de-presence/06.jpg"
                                /></span></p>
                    </div>

                    <div class="compteur">
                        <?php echo ++$slide;?>/<?php echo $nb_images;?>
                    </div>


                </div>
            </li>
            <li>
                <div class="diapositive">

                    <div class="description">

                        <p>
							  		<span class="legende-galerie">
							  			Maison de la Musique de Nanterre, 2012
							  		</span>
                        </p>

                    </div>

                    <div class="container-image">
                        <p><span>
								<img
                                    alt="Jetons de présence, par Gérard Paris-Clavel"
                                    class="W"
                                    src="images/02-Jetons-de-presence/07.jpg"
                                /></span></p>
                    </div>

                    <div class="compteur">
                        <?php echo ++$slide;?>/<?php echo $nb_images;?>
                    </div>


                </div>
            </li>
            <li>
                <div class="diapositive">

                    <div class="description">

                        <p>
							  		<span class="legende-galerie">
							  			Exposition au centre social AMI à la Patrotte, quartier de Metz, 2009
							  		</span>
                        </p>

                    </div>

                    <div class="container-image">
                        <p><span>
								<img
                                    alt="Jetons de présence, par Gérard Paris-Clavel"
                                    class="W"
                                    src="images/02-Jetons-de-presence/08.jpg"
                                /></span></p>
                    </div>

                    <div class="compteur">
                        <?php echo ++$slide;?>/<?php echo $nb_images;?>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</div>




</body><!--//close body-->

</html><!--//close html-->