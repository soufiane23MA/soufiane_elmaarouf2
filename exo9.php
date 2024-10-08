<h1>exercice9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio); </p>
<h2>Resultat</h2>

<?php 
//déclaration tableau
$nomRadios = ["Masculin","Feminin","Autres"];


function afficherRadio ($nomRadios){

  foreach( $nomRadios as $value ){
    $result.= "<input type ='radio' id='$value' name='sexe' value='$value' />" . $value . '<br>';
  };
  return $result;
  
};
  echo afficherRadio($nomRadios );

