<?php 
include('includes/fonctions.php');
?>

/* 
- Créer un tableau php avec ses nombres : 
27, 15, 34, 379, 248, 5643, 81, 211, 999, 142,, 300, 572

- tester les nombres de ce tableau pour savoir si chaque 
nombre est pair ou impair (un nb est pair si le résultat de la division
par 2 est 0)

- Afficher les résultats sous forme de liste html 'ul' comme ceci 
(xx, yy sont les nombres du tableau) :

* xx : pair 
* yy : impair
...

*/

<?php 
echo "<br>";
echo "<br>";
$pairImpairs = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

$liste = "<ul>";
foreach($pairImpairs as $pairImpair) {
    $liste .= "<li>$pairImpair</li>";
    if ($pairImpair%2 === 0){
    echo "<li>$pairImpair est pair</li>";
} else {
    echo "<li>$pairImpair est impair</li>";
}
} 
$liste .= "</ul>";

/* 
Parcourir le tableau user et pour toutes les entrées vide, mettre 
"Aucune Information"
*/

$user = [
    "firstname" => "Mike",
    "lastname" => "Olganh",
    "pseudo" => "",
    "age" => 34, 
    "food" => "",
    "sport" => "",
];

echo "<br>";
echo "<br>";
isEmpty($user);

/* 
Trouver le nb maximum de ce tableau. 
*/
echo "<br>";
echo "<br>";
$nombres = [4, 15, 2, 145, 42, 5, 78, 12];
$index = $nombres[0];

foreach($nombres as $nombre) {
    // echo "$nombre <br>";
    if ($nombre > $index) {
        $index = $nombre;
    } 
    debug($nombre);
}

debug("Le nombre maximum est : $index");


?>