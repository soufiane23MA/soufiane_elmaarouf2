<h1>exercice11</h1>
<p> Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");

Affichage
vendredi 23 février 2018</p>
<h2>Resultat </h2>

<?php
setlocale(LC_TIME, 'fr_FR.UTF-8');
  