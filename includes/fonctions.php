<?php 

// Fonction de debug pour que le tableau s'affiche bien
function debug($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// Création d'une fonction pour renseigné un champ vide
function isEmpty($user){
    foreach($user as $key => $valeur) {
        if ($valeur == NULL){
            echo "<li>$key : Aucune information</li>";
        } else {
            echo "<li>$key : $valeur</li>";
        }
}
}