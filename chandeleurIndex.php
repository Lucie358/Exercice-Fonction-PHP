<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recette de crêpes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styleChandeleur.css">
</head>

<body>
    <h1 class="text-center"> Crêpes party !</h1>
   
    <form action="" method="get" class="text-center">
        <label for="basic-url">Combien de personnes seront présentes ? (8 mininimum)</label>
        <div class="input-group mb-3 w-25 mx-auto">
            <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2" name="nbinvite" value="<?php if (isset($_GET['nbinvite'])) {
                                                                                                                                                                                } ?>">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">invité(e)s</span>
            </div>

        </div>
        <button class="btn btn-outline-primary" type="submit">Envoyer</button>
    </form>
</body>

</html>

<?php
include 'inc/functionChandeleur.php';


// Si il y a des données en GET
if (isset($_GET['nbinvite'])) {
    // Je met dans une variable
    $nbinvite = $_GET['nbinvite'];
    // Je modifie la recette et je l'affiche
    if ($nbinvite >= 8 && $nbinvite <= 20) {
        echo '<h2 class="text-center"> Ingredients pour ' . $nbinvite . ' personnes: </h2>';
        $recetteNbInvite = CalculQuantitee($nbinvite);
        //Conversion g vers oz
        echo '<h2 class="text-center"> Poids en oz </h2>';
        $poidsEnOz = calculOz($nbinvite);

        //Conversion g vers livre
        echo '<h2 class="text-center" > Poids en livre </h2>';
        $poidsEnLbs = calculLivre($nbinvite);
        //Nombre de kcal total
        echo '<h2 class="text-center"> Nombre de calories: </h2>';
        nbCalorie($nbinvite);
        // alerte
        echo '<h2 class="text-center" > Niveau de discussion invités: </h2>';
        RandomDiscussion();
    } elseif ($nbinvite > 20) {
        echo '<p class="error bg-danger text-white w-25 rounded mx-auto text-center"> Il y a trop de personnes </p>';
    }  elseif (empty($nbinvite)) {
        echo '<p class="error bg-danger text-white w-25 rounded mx-auto text-center"> Vous devez entrer un nombre </p>';
    } 
    else {
        echo "<p class=' error bg-danger text-white w-25 rounded mx-auto text-center'> Pas assez de personnes </p>";
    }
}

?>