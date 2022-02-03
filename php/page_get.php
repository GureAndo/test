<?php

//j'ouvre mon script avec cette condition de maniere a ne pas avoir d'erreur/warrning php dans le cas ou aucune info n'aura transiter dans l'url
if($_GET){
    // pour recuperer les valeur transiter via l'url je fait appel a la superglobale $_GET
    //c'est une variable de type tableau, et c'est pour cela que je crochete a l'indice desirer pour recupere la valeur de l'indice
    echo $_GET['produit'] . " au " . $_GET['variete'] . "<br>";
    echo"vendu " . $_GET['prix'] . "€,      aujourd'hui seulement <br>";
};

