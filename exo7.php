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
		"Choix 2" => false , 
		"Choix 3" => true
	];

function genererCheckbox($elements) {
			
	$result =" <form method = 'get' action= ''>";
	foreach($elements as $choix => $checked){
		$ischecked =  $checked  ? "checked = 'checked' " : " "  ;
		$result.= " <input type = 'checkbox' name = 'choix ' $ischecked >";
		$result.="<label for = 'choix'>$choix</label><br> ";
 	}
							
		$result.="</form>";
		return $result;
 };

 echo genererCheckbox($elements);


		