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
    
    $capitales= ["France"=>"Paris",
                "Allemagne"=>"Berlin",
                "USA"=>"Washington",
                "Italie"=>"Rome"
            ];

                      function afficherTableHTML($capitales){


                    echo "<table>
                    <thead>
                    <tr>
                    <td>Pays</td>
                    <td>Capital</td>
                    </tr>
                    
                    </thead>
                    
                    </table>";

                foreach ($capitales as $pays => $capital){

                $paysMaj = strtoupper($pays);
                
                echo "<table>
            
                    
                        <td> $paysMaj</td>
                        <td>$capital</td>
                
                    </table>";

                };

            };
            echo afficherTableHTML($capitales);

            
    ;