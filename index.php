<?php 
include('includes/header.php');
include('includes/fonctions.php');
?>

<main>
<?php 
$tableau = array();
$tableau = [];
$tableau = [true, 45, 'Terre', [45, 46, 47]];

debug($tableau);

$tableau[] = 'Janvier';
array_push($tableau, 'Voiture');
array_push($tableau, 'Voiture 2', 'Tortue Ninja');

debug($tableau[2]);

echo count($tableau);

echo "<br />";
$notes = [12, 5, 16, 7];
// Afficher la moyenne des notes 
$sommesNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
$moyennesNotes = $sommesNotes / count($notes);

echo $moyennesNotes;

// Pour merger un tableau à un autre 
$tab2 = array_merge($tableau, $notes);

debug($tab2);

echo "<br>";
echo "<br>";
// Boucles qui parcoure tout le tableau notes
for($k=0; $k < count($notes); $k++) {
    echo $notes[$k] . "<br>";
}

// Boucles qui calcule la moyenne
echo "<br>";
echo "<br>";
$sommesNotes = 0;
for ($j = 0; $j < count($notes); $j++) {
    $sommesNotes += $notes[$j];
}
$moyennesNotes = $sommesNotes / count($notes);
echo $moyennesNotes;

echo "<br>";
echo "<br>";
foreach($notes as $note) {
    echo $note . '<br>';
}

// ---------- Tableau associatif ----------
echo "<br>";
echo "<br>";

$fruits = ['Bananes' => 'jaune', 'Pomme' => 'rouge', 'Kiwi' => 'vert'];
debug($fruits);

echo "La couleur de la pomme est " . $fruits['Pomme'] . ".";
echo 'La longueur du tableau $fruits est de : ' . sizeof($fruits);

echo "<br>";
echo "<br>";
$ages = [
    'Michel' => 34,
    'Lucie' => 22,
    'Bernard' => 77
];

$chaine = implode('-', $ages);
echo $chaine;
$ages2 = explode('-', $chaine);
debug($ages2);

$ages['Paul'] = 33;
$ages['Lucie'] = 02;
debug($ages);

foreach($ages as $key => $valeur){
    echo $key . ' a ' . $valeur . ' ans<br>';
}

echo "<br>";
$liste = "<ul>";
foreach($ages as $key => $valeur){
    $liste .= "<li>$valeur</li>";
}
$liste .= "</ul>";
echo $liste;

echo "<br>";
echo "<br>";
$planetes = ['Jupiter', 'Mars', 'Terre', 'Pluton'];
debug($planetes);

asort($planetes);
arsort($ages);

debug($planetes);
debug($ages);

arsort($planetes);
krsort($ages);

debug($planetes);

$tab = [
    'voiture' => 'Ford',
    'nombre' => [1, 2, 3, 4],
    'planete' => ['mars', 'terre']
];

debug($tab);

debug($tab['nombre'][0]);

$produits = [
    ['nom' => 'chaussette', 'prix' => 10],
    ['nom' => 'velo', 'prix' => 50],
    ['nom' => 'carotte', 'prix' => 2],
    ['nom' => 'boulon', 'prix' => 7],
]
?>
<!-- 
    Traverser le tableau produits (foreach) pour afficher le nom du produit 
    et son prix : 
    'nom du produit' : 'prix' €
    'nom du produit' : 'prix' €
    ...
-->

<div>
    <ul>
        <?php 
        foreach($produits as $produit) {
        ?>
        <li>
            <?php /* echo $produit['nom'] . ' : ' $produit['prix'] . '€';*/?>
            <?= $produit['nom']?> : <?= $produit['prix']?> €
        </li>
        <?php } ?>
        
        
        
    </ul>
</div>

<?php 

// $peoples = [
//     [
//         'nom' => 'Jean',
//         'prenom' => 'Momo',
//         'email' => 'momo@gmail.com'
//     ],
//     [
//         'nom' => 'Dupond',
//         'prenom' => 'Lucie',
//         'email' => 'dupond@gmail.com'
//     ]
//     ];

// debug($peoples);
// echo "Le nom de Lucie est " . $peoples[1]['nom'];
// $json_peoples = json_encode($peoples);
// debug($json_peoples);

$json_peoples = '[{
    "nom" : "Durand",
    "prenom" : "Marc",
    "age" : 23,
    "couleur" : ["rouge", "vert", "jaune"],
    "image" : "https://ximg.es/64x64/000/fff"
}, {
    "nom" : "Vilko",
    "prenom" : "Anny",
    "age" : 45,
    "couleur" : ["marron", "noir", "violet"],
    "image" : "https://ximg.es/64x64/000/fff"
}]';

// debug($json_peoples);
// $peoples_array_php = json_decode($json_peoples, true);
// debug($peoples_array_php);

$peoples_array_php = json_decode($json_peoples, true);
debug($peoples_array_php);
echo "Le nom de Anny est " . $peoples_array_php[1]['nom'];

?>

<div class="json">
    <img src="<?php echo $peoples_array_php[1]['image']; ?>" alt="">
    <p><?php echo "Le nom de Anny est " . $peoples_array_php[1]['nom']; ?></p>
</div>

</main>

<?php
include('includes/footer.php');