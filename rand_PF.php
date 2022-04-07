<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>50PF</title>
</head>
<body>
<h3>maxPile in a row.</h3>

<?php
ini_set('max_execution_time', 0);
$pile = 0;
$face = 1;
$compteurP = 0;
$x = true;
$start_time = microtime(true);

    while ($x)  // boucle tant que vrai
{
    
    if (rand($pile, $face) == $pile) // si le resultat aleatoire donne Pile
    {
        $compteurP++; // incrementation du compteur
        if ($compteurP == 25){ // une fois le compteur atteint dune maniere consecutive
            $x = false; // sort de la boucle
        }
    }
    else 
    {
        $compteurP = 0; // Si face compteur a 0
    }
    $rep++; // rep de la boucle
      
}
 
$end_time = microtime(true);

$execution_time = ($end_time - $start_time); // temps dexecution 
  
echo " <br>Execution time of script = ".$execution_time." sec";
echo "<br>" . $execution_time/60 . " minutes";
echo "<br>" . ($execution_time/60)/60 . " hours";
echo "<br>" . (($execution_time/60)/60)/24 . " days";



echo "<h1><br>Ont obtien 25 piles en ligne apres $rep repetitions</h1>";

?>

</body>
</html>
