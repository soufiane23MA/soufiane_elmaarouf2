<h1>exercice5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);</p>
<h2>Resultat</h2>

<?php
// je ne sais pas si naiceaaire,
// de mettre le tous dans une balise <p></p>

	$nomsInput = ["Nom","Prénom","Ville"];
	
	function afficherInput($nomsInput){
			foreach($nomsInput as $input){
        echo "<form method= 'get' action=''></form>";
				echo "<label for='input'>$input</label> <br>" ;
				echo "<input type='text' name='input'><br>";
			

			};
			}; 
			afficherInput($nomsInput);

