<h1>Accueil</h1>

<?php

$personne = new Utilisateur("DUPON");
$truc = "Bonjour";

$personne->prename; // __get 

//$habitant = clone $personne;



// $personne->prenom="ff";  // __set
//echo $personne("Michael Tom");  //__invoke
// $personne->mangerDesFrites("orange","kiwi","banana"); //__call

// $personne->Michael=180; // __set


/* if (isset($personne->name)) { //__isset
    echo "Le nom est $personne->name ";
    
} else echo "Il n'y a pas de chose J'en sais rien ".$personne->name; */

//dump($personne->name);
//dump($personne);


?>