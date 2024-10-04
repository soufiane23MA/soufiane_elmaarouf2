<h1>exercice2</h1>
<p> Soit le tableau suivant :
$capitales =
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
Affichage
Pays Capitale
ALLEMAGNE Berlin
FRANCE Paris
ITALIE Rome
USA Washington</p>
<h2>Resultat</h2>
<?php
    
    $capitales= ["France" =>"Paris",
                "Allemagne" =>"Berlin",
                "USA" =>"Washington",
                "Italie" =>"Rome"
            ];
function afficherTableHTML($capitales){

   asort($capitales);// classer par ordre alphabétique!


  echo "<table style='border: 1px solid black; border-collapse: collapse; width: 50%;'>";
        echo "<tr>
                <th style='border: 1px solid black; padding: 8px;'>Pays</th>
                <th style='border: 1px solid black; padding: 8px;'>Capitale</th>
            </tr>";
        

    foreach ($capitales as $pays => $capital){

    $paysMaj = strtoupper($pays);

     echo "<tr>";
        echo "<td style='border: 1px solid black; padding: 8px;'>$paysMaj</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>$capital</td>";
        echo "</tr>";

    };

    };
    afficherTableHTML($capitales);


    ;