
<?php
//Variable input formulaire : 
$nbrDes = $_POST['nbrDes'];
$nbrFaces = $_POST['nbrFaces'];

$listeResultatDes = array(); 
for($i =1 ; $i < $nbrDes +1; $i++){
$resultatDes = random_int(1,$nbrFaces);
array_push($listeResultatDes,$resultatDes);//1er parametre tableau cible, 2ieme valeur a ajouter 
}
// permet de faire la somme des valeurs du tableau
$resultatTotal = array_sum($listeResultatDes);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleresult.css" />
    <title>Resultat</title>
</head>
<body>

<header>
        <h1>L'Ouvre-Boîtes</h1>

</header>
    <main>
    <h1>Vos résultats</h1>
    <p>Vous avez choisi <?= $nbrDes . " dés avec ". $nbrFaces. " faces"?> </p>
    <p>Le score du lancer est de : <?=implode(',',$listeResultatDes) ?></p>
    <h2>Score final de la partie</h2>
    <?=$resultatTotal ?>
    </main>
    
    <div class="image">
    <form action="resultat.php" method="post">
    <input type="hidden" name="nbrDes" value="<?php echo($nbrDes); ?>">
    <input type="hidden" name="nbrFaces" value="<?php echo($nbrFaces); ?>">

         <input type='submit' value='Relancer'>
         </form>
         <div class="imgbox">
        <a href="index.html"><img src="home.png" alt="retour accueil"></a>
        </div>
    </div>

    <footer>

    </footer>
</body>
</html>