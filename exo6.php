<h1>exercice6</h1>
<p> Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);
</p>
<h2>Resultat</h2>

<?php
// d'abord crée le html et aprés insérer le php !
$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($elements){

 echo "<form method='get' action=''>";
 echo "<select name='element' id= 'element'>";
				foreach($elements as $element)
				{
						echo "<option value='$element'>$element</option>";
					
					"</select>";
					
				};
				
				"</form>";
};
alimenterListeDeroulante($elements);
 
