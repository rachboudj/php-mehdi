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
foreach ($pairImpairs as $pairImpair) {
    $liste .= "<li>$pairImpair</li>";
    if ($pairImpair % 2 === 0) {
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

foreach ($nombres as $nombre) {
    // echo "$nombre <br>";
    if ($nombre > $index) {
        $index = $nombre;
    }
    debug($nombre);
}

debug("Le nombre maximum est : $index");

// Dans une card; ajouter une photo, nom, prénom, email, date 
// de naissance, adresse, téléphone
$users = file_get_contents("./data/users.json");
$users_array_phps = json_decode($users, true);
?>
<div class="container-card">
    <?php
    // debug($users_array_phps);
    foreach ($users_array_phps['results'] as $users_array_php) {
        // echo $users_array_php['name']['first'];
    ?>


        <div class="card">
            <div class="img-card">
                <img src="<?php echo $users_array_php['picture']['thumbnail'] ?>" alt="">
            </div>
            <h3><?php echo $users_array_php['name']['first'] ?> <?php echo $users_array_php['name']['last'] ?></h3>
            <h4><?php echo $users_array_php['email'] ?></h4>
            <p class="datenaissance"><?php echo $users_array_php['registered']['date'] ?></p>
            <p class="adresse"><?php echo $users_array_php['location']['street']['number'] ?>, <?php echo $users_array_php['location']['street']['name'] ?></p>
            <p class="téléphone"><?php echo $users_array_php['phone'] ?></p>
        </div>



    <?php
    }
    ?>
</div>
<style>
    .container-card {
        display: flex;
        justify-content: space-around;
        width: 100%;
        flex-wrap: wrap;
        margin: 2em auto;
    }

    .container-card .card{
        width: 28%;
        display: flex;
        flex-direction: column;
        text-align: center;
        background-color: #fff;
        margin-top: 1em;
        padding: 2em 1em;
        border-radius: 10px;
        background-color: cornflowerblue;
    }

    .container-card .card .img-card{
        width: 100%;
        border-radius: 50%;
    }

    .container-card .card .img-card img{
        width: 40%;
        border-radius: 50%;
    }
</style>

<?php 
/*
Travaller avec le fichier json persons.json dans le dossier Travaux
    Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html <h3>
    Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
    Afficher dans une balise html article dans l'ordre suivant :
        image de la personne dans une balise html img
        Nom : le nom de la personne
        Age: age de la personne
        Couleur des yeux : la couleur des yeux de la personne
        Email: email de la personne
        Age: age de la personne
        Fruit favori : fruit favori de la personne
        Si isActive est à true : afficher ACTIF
        Tags : afficher tous les tags de la personne séparé d'une virgule
        Ne pas afficher la derniere la deniere virgule de tous les tags
        Chaque personne sera séparé d'une ligne horizontale html <hr>
Vous trouverez une capture du resultat attendu.
*/


$persons = json_decode(file_get_contents("./data/persons.json"), true);
debug($persons);

?>

<h3><?= $persons[2]['friends'][1]['name'] ?></h3>
<hr>
<p>La couleur des yeux de Ball Shaffer est : <strong><?=$persons[1]['eyeColor'] ?></strong></p>
<hr>
<article>
    <?php foreach($persons as $key => $value) { ?>
    <img src="<?=$value["picture"]?>" alt="">
    <p>Nom : <?=$value["name"] ?></p>
    <p>Âge : <?=$value["age"] ?></p>
    <p>Couleur des yeux : <?=$value["eyeColor"] ?></p>
    <p>Email : <?=$value["email"] ?></p>
    <p>Fruit favori : <?=$value["favoriteFruit"] ?></p>
    <?php 
        if ($value['isActive']) {
            echo '<p>ACTIF</p>';
        }

    $tags = implode(",", $value['tags']);
    ?>
    <p>Tags : <?php echo $tags ?> </p>
    <hr>
    <?php } ?>
</article>