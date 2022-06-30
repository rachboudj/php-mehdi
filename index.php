<?php 
include('includes/header.php');
include('includes/fonctions.php');
?>

<main>
<?php 
echo "<hr>";
echo "<h2>Tableau</h2>";
$tableau = array();
$tableau = [];
$tableau = [true, 45, 'Terre', [45, 46, 47]];

debug($tableau);


// Pour ajouter une ligne dans un tableau
$tableau[] = 'Janvier';
array_push($tableau, 'Voiture');
array_push($tableau, 'Voiture 2', 'Tortue Ninja');

debug($tableau[2]); // Afficher 2ème index du tableau

// Compter le nb d'index dans le tableau
echo count($tableau);

echo "<br />";
$notes = [12, 5, 16, 7];
// Afficher la moyenne des notes 
echo "<h4>Calculer la moyenne d'un tableau</h4>";
$sommesNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
$moyennesNotes = $sommesNotes / count($notes);

echo $moyennesNotes;

// Pour merger un tableau à un autre 
echo "<h4>Merger un tableau à un autre</h4>";
$tab2 = array_merge($tableau, $notes);

debug($tab2);

echo "<br>";
echo "<br>";
// Boucles qui parcoure tout le tableau notes
echo "<h4>Boucle qui parcoure un tableau (ici le tableau de note)</h4>";
for($k=0; $k < count($notes); $k++) {
    echo $notes[$k] . "<br>";
}

// Boucles qui calcule la moyenne
echo "<br>";
echo "<br>";
echo "<h4>Boucle qui calcule la moyenne</h4>";
$sommesNotes = 0;
for ($j = 0; $j < count($notes); $j++) {
    $sommesNotes += $notes[$j];
}
$moyennesNotes = $sommesNotes / count($notes);
echo $moyennesNotes;

echo "<br>";
echo "<br>";
echo "<h4>Afficher toutes les notes (ressemble à vuejs)</h4>";
foreach($notes as $note) {
    echo $note . '<br>';
}

// ---------- Tableau associatif ----------
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<h2>Tableau Associatif</h2>";

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

echo "<h4>Trie croissant des valeur</h4>";
debug($planetes);
echo "<h4>Trie décroissant des valeur</h4>";
debug($ages);

arsort($planetes);
krsort($ages);

echo "<h4>Trie décroissant des clés</h4>";
debug($ages);

$tab = [
    'voiture' => 'Ford',
    'nombre' => [1, 2, 3, 4],
    'planete' => ['mars', 'terre']
];

debug($tab);

debug($tab['nombre'][0]);

$tab = [];
$tab[] = ['A','B','C'];
$tab[] = ['S','U','V'];
$tab[] = ['O','U','E','I'];

// Écrire le mot ESCCI
debug($tab);
debug($tab[2][2] . $tab[1][0] . $tab[0][2] . $tab[0][2] . $tab[2][3]);



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

</main>

<?php
include('includes/footer.php');