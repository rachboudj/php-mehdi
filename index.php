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
    echo "<li>$valeur</li>";
}
$liste = "</ul>";


?>
</main>

<?php
include('includes/footer.php');