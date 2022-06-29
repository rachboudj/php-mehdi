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

echo $moyennesNotes

?>
</main>

<?php
include('includes/footer.php');