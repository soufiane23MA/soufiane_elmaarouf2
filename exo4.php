 <h1>exercice4</h1>
<p> A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
Affichage
Pays Capitale Lien wiki
ALLEMAGNE Berlin Lien
ESPAGNE Madrid Lien
FRANCE Paris Lien
ITALIE Rome Lien
USA Washington Lien</p>
<h2>Resultat</h2>

<?php

 
    $capitales= ["France" =>"Paris",
                "Allemagne" =>"Berlin",
								"Espagne"=> 'Madrid',
                "USA" =>"Washington",
                "Italie" =>"Rome"
            ];

function afficherTableHTML($capitales){

  asort($capitales);
  // classer par ordre alphabétique!
  // ajouter la colones avec les liens
  // ajouter la nouvelle variable avec l'ancre


  $result = "<table style='border: 1px solid black; border-collapse: collapse; width: 50%;'>";
  $result .="<tr>
      <th style='border: 1px solid black; padding: 8px;'>Pays</th>
      <th style='border: 1px solid black; padding: 8px;'>Capitale</th>
      <th style='border: 1px solid black; padding: 8px;'>Lien WIki</th>
      </tr>";
  foreach ($capitales as $pays => $capital){
      $paysMaj = strtoupper($pays);
      $lien = "<a href='https://fr.wikipidia.org/wiki';";

      $result .= "<tr>";
      $result .= "<td style='border: 1px solid black; padding: 8px;'>$paysMaj</td>";
      $result .= "<td style='border: 1px solid black; padding: 8px;'>$capital</td>";
      $result .= "<td style='border: 1px solid black; padding: 8px;'><a href= $lien target = _blank>LIEN</a></td>";
      $result .="</tr>";
  };
    
  $result .= "</table>";
  return $result;

};

 echo afficherTableHTML($capitales);


          










						





