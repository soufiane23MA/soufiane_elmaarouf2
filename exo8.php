<h1>exercice8</h1>
<p> Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);
</p>
<h2>Resultat</h2>

<?php


function repetImage ( ) {
	
	$url = "<img src='http://my.mobirise.com/data/userpic/764.jpg'> ";

	  echo str_repeat($url,4);
	
};
repetImage();