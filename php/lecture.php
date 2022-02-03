<?php

// je declare un variable $nomFichier a laquelle j'affecte le fichierque je veux explorer
$nomFichier = "recupDonnees.txt";
// define ('test',"recupDonnees.txt");
//file() est une fonction predefinie qui permet d'ouvrir un fichier et retourner son contenu sous la forme d'un tableau
//je lui donne en parametre mon fichier a explorer(affecter dans la vraiable $nomFichier)
//j'affecte
$folder = file($nomFichier);
// $folder = file(test);
//j'aurais pu ecrire ceci plus rapidement ,sans la ligne 4 
//$folder = file("recupDonnees.txt");
// mais beacoup de dev prefere l'autre logic 
//j'affiche les inf contenue dans $folder avec un print_r
print "<pre>";print_r($folder);echo"</pre>";

//affichage conventionelle possible de ses donnees collecter grace a une boucle foreach
foreach($folder as $ligne){
    echo $ligne . "<br>";
}

// encore un autre affichage possible de ces données grace a implode
echo implode(' / ', $folder);