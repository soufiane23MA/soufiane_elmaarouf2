<h1>exercice1</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
Affichage
vendredi 23 février 2018
 </p>
<h2>Resultat</h2>

<?php
 
function formaterDateFr($dateString){

	$date = new DateTime($dateString);

	$formatter = new IntlDateFormatter (
	'fr_FR',
	IntlDateFormatter::FULL,
	IntlDateFormatter:: NONE);

 $formatter -> setPattern('EEEE d MMMM y');
	return  $formatter ->format($date);
};

echo formaterDateFr("2018-02-13");
