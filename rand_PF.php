<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>50_PF</title>
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

    while ($x) // Tant que true - loop
{
    
    if (rand($pile, $face) == $pile)
    {
        $compteurP++;  // si le resultat est Pile, augmentation du compteur.
        if ($compteurP == 45){ // si le compteur reach 50 , on sort de la Boucle
            $x = false;
        }
    }
    else 
    {
        $compteurP = 0; // si le resultat nest pas face, on restart le compteur a 0.
    }
    $rep++; // compteur de rep dans la boucle
      
}
} 
$end_time = microtime(true);

$execution_time = ($end_time - $start_time); // temps dexecution 
  
echo " <br>Execution time of script = ".$execution_time." sec";
echo "<br>" . $execution_time/60 . " minutes";
echo "<br>" . ($execution_time/60)/60 . " hours";
echo "<br>" . (($execution_time/60)/60)/24 . " days";



echo "<h1><br>Ont obtien 45 piles en ligne apres $rep repetitions</h1>";

?>

</body>
</html>