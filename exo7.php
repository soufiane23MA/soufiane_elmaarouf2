<h1>exercice7</h1>
<p> Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>
<h2>Resultat</h2>

<?php

// déclarer les choix avec un tableau associatf (choix => vrais/faux)
 
$elements = [
	"Choix 1" => false , 
	"Choix 2" => true , 
	"Choix 3" => false
 ];

function genererCheckbox($elements) {
echo " <form method = 'get' action= ''>";
		foreach($elements as $choix => $checked){
			$checked ? "checked = 'checked' " : " "  ;
	echo " <input type = 'checkbox' name = 'choix[]' checked= '$checked' >";
	echo "<label for = 'choix'>$choix</label><br> ";
			}
	
	echo "</form>";
};
genererCheckbox($elements);


echo "je n'ai pas encore réussi à recoudre le probléme de choix";