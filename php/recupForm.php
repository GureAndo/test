<?php

if($_POST){  
    echo "<ul>";
        //pour recuperer les valeur qui arrivent de 'entrainement.php' je fait apelle a la superglobal $_POST
        //comme $_GET et les autre superglobale, $_POST et un type array d'ou la syntaxe ci dessou pour recuperer les valeurs avec l'indice entre []
        echo"<li>Prenom: $_POST[prenom]</li>";
        echo"<li>Description: $_POST[description]</li>";
        echo" <li>Année de naissance: $_POST[annee]</li>";
    echo "</ul>" ;

    //fopen() permet d'ouvrir un fichier
    // prend 2 arguments. le 1er ,le nom du fichier et le segond le mode d'ouverture ici a 
    //le mode d'ouverture 'a' permet d'ouvrir un fichier, mais s'il il existe pas encore, il va le cree
    //j'affecte le resultat de cette operation (ouvrire un fichier en mode a ) dans une vraiable que je nomme $fichier
    $fichier = fopen('recupDonnees.txt', 'a');
    //fwrite()me permet d'ecrire dans ce fichier 
    //elle prend aussi deux arguments le 1er c'est le fichier ouvert(ici $fichier)le second argument sera le contenu a ecrire dans le fichier
    // le \n en fin de string est un equivalent de <br>, ratour a la ligne
    fwrite($fichier, "prénom: " . $_POST['prenom'] . "\n");
    fwrite($fichier, "Description: " . $_POST['description'] . "\n");
    fwrite($fichier, "annee de naissance: " . $_POST['annee'] . "\n");
    // la ligne ce dessou me sert de separateur entre chaque nouvel envoi de formulaire par un nouvel utilisateur
    fwrite($fichier, "--------------------\n");
    //fclose() va fermer le fichier,avec un argument ,le fichier a fermer
    $fichier = fclose($fichier);
}

