<h1>exercice1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
Affichage (si $texte = « Mon texte en paramètre »)
MON TEXTE EN PARAMETRE</p>
<h2>Resultat</h2>

<?php
//déclarer la variable $texte

$texte= "« Mon texte en paramètre »";

// chnagement de style de la variable;

function convertirMajRouge($texte){
    
    $texte2 = mb_strtoupper($texte);
    return "<p  style = 'color: red';> $texte2 </p>";

};

echo convertirMajRouge($texte);