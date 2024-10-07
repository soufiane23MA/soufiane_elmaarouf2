




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
<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y') ?>.</p>

<?php
echo 
"
<html>
<body>

	<form action='' methode = 'get'>
	<label for =' nom'> nom : </label><br>
	<input  type ='text' name ='nom' id ='nom'><br>
		<label for ='prenom'>Prenom :</label><br>
	<input  type ='text' name ='prenom' id ='prenom'><br>
		<label for ='email'>Email :</label><br>
	<input  type ='email' name ='Email' id ='email:'><br>


	</form>"

 

?>


	
</body>
</html> 
 