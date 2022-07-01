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

$users = file_get_contents("./data/users.json");
$users_array_phps = json_decode($users, true);
// foreach($users_array_phps as $users_array_php) {
//     echo $users_array_phps;
// }
// debug($users_array_php);

debug($users_array_phps);

// debug($users_array_php['results'][$key]['gender']);
// echo "Genre : " . $users_array_php['results'][0]['gender'];
// echo $users_array_php['results'][0]['gender'];



// Dans une card; ajouter une photo, nom, prénom, email, date 
// de naissance, adresse, téléphone

?>
<div class="container-card">
    <div class="card">
    <img src="" alt="">
    <h3>Nom : <?php echo $users_array_phps['results'][0]['name']['last']; ?>; Prénom : <?php echo $users_array_phps['results'][0]['name']['first'] ?></h3>
    <h4>Email : <?php echo $users_array_phps['results'][0]['email'] ?></h4>
    <p class="naissance"><?php echo $users_array_phps['results'][0]['registered']['date'] ?></p>
    <p class="adresse"><?php echo $users_array_phps['results'][0]['location']['street']['number'] ?>, <?php echo $users_array_phps['results'][0]['location']['street']['name'] ?></p>
    <p class="telephone"><?php echo $users_array_phps['results'][0]['phone'] ?></p>
    </div>
</div>
