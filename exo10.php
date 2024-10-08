




	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
	<h1>exercice10</h1>
	<p> En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
	complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
	« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
	Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
	de validation (submit).</p>
	<h2>Resultat</h2>	
	 

	<?php
		

	$nomsInput = [
		"Nom" => "text",
		"Prénom" => "text",
		"ville" => "text",
		"email" => "email",
		"dateNaissance" => "date",
		"couleur" => "color"
	];

	$sex = ["Monsieur","Madame","Mademoiselle"];
	
	$elements = [
		"Développeur Logiciel " , 
		"Designer web", 
		"Intégrateur", 
		"Chef de projet", 
	];

	function alimenterListeDeroulante($sex){

		$result = "<select name='genre' id= 'genre'>"; 
		foreach($sex as $genre){
			$result .=  "<option value='$genre'>$genre</option>";		
		};
			$result .= "</select>";
		return $result;
	};
				 			

	// fonction qui permet de crée les input
	function afficherInput($nomsInput){
			$result = "";

		foreach($nomsInput as $input => $type){
			$result .= "<label for='$input'>$input</label> <br>" ;
			$result .=  "<input type='$type' name='input' id=$input><br>";
		};
		return $result;
	}; 
	// fonction du choix de résponsbilité
	function genererCheckbox($elements) {
							
		$result = "";
		foreach($elements as $choix){
			
		$result.= "<input type ='radio' id='$choix' name='choix' value='$choix' />" 
		.$choix . '<br>';
		}; 
		return $result;
	};
	//fonction qui génere le formulaire globale
	function afficherFormulaire($nomsInput, $sex, $elements) {
		$result = "<form>";
		$result .= alimenterListeDeroulante($sex)."<br>";
		$result .= afficherInput($nomsInput)."<br>";
		$result .= genererCheckbox($elements)."<br>";
		$result .= "<input type = 'submit' 'value ='Valider'>";

		$result .= "</form>";
		return $result;
	}
						
	echo afficherFormulaire($nomsInput, $sex, $elements);		
	
?>


	 > 
	