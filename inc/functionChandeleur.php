<?php
function CalculQuantitee($nbinvite)
{
    $recette = [
        "Farine(g)" => 250,
        "Oeuf" => 4,
        "Lait (cl)" => 50,
        "Pincée de sel" => 1,
        "Beurre (g)" => 50,
        "Sachet de sucre vanillé" => 1,
        "Cuillère a soupe de fleur d'oranger" => 1
    ];
    foreach ($recette as $ingredients => $quantite) {
        if ($nbinvite == 8) {

            echo   '<li class="list-group-item w-50 mx-auto text-center " >' . $ingredients . ' : ' . $quantite * 1 . '</li> <br />';
        }
        if ($nbinvite > 8 && $nbinvite < 11) {

            echo   '<li class="list-group-item w-50 mx-auto text-center " >' . $ingredients . ' : ' . $quantite * 1.5 .  '</li> <br />';
        }
        if ($nbinvite >= 11 && $nbinvite < 14) {

            echo  '<li class="list-group-item w-50 mx-auto text-center">' . $ingredients . ' : ' . $quantite * 1.8 .  '</li> <br />';
        }
        if ($nbinvite >= 14 && $nbinvite < 16) {

            echo  '<li class="list-group-item w-50 mx-auto text-center">' . $ingredients . ' : ' . $quantite * 2 . '</li> <br />';
        }
        if ($nbinvite >= 16 && $nbinvite <= 20) {

            echo  '<li class="list-group-item w-50 mx-auto text-center">' . $ingredients . ' : ' . $quantite * 4 . '</li> <br />';
        }
    }
}
function calculOz($nbinvite)
{
    $poids = [
        'Farine' => 250,
        'Beurre' => 50
    ];
    foreach ($poids as $ingredients => $poidsG) {
        if ($nbinvite == 8) {

            echo   '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG / 28), 2) . ' oz </li> <br />';
        }
        if ($nbinvite > 8 && $nbinvite < 11) {

            echo   '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG * 1.5 / 28), 2) . ' oz </li> <br />';
        }
        if ($nbinvite >= 11 && $nbinvite < 14) {

            echo  '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG * 1.8 / 28), 2) . ' oz </li> <br />';
        }
        if ($nbinvite >= 14 && $nbinvite < 16) {

            echo  '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG * 2 / 28), 2) . ' oz </li><br/>';
        }
        if ($nbinvite >= 16 && $nbinvite <= 20) {

            echo  '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG * 4  / 28), 2) .  ' oz </li><br />';
        }
    }
}
function calculLivre($nbinvite)
{
    $poids = [
        'Farine' => 250,
        'Beurre' => 50
    ];
    foreach ($poids as $ingredients => $poidsG) {
        if ($nbinvite == 8) {

            echo   '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG / 453), 2) . ' lbs </li><br />';
        }
        if ($nbinvite > 8 && $nbinvite < 11) {

            echo   '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG * 1.5 / 453), 2) . ' lbs</li><br />';
        }
        if ($nbinvite >= 11 && $nbinvite < 14) {

            echo  '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG * 1.8 / 453), 2) . ' lbs </li><br />';
        }
        if ($nbinvite >= 14 && $nbinvite < 16) {

            echo  '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG * 2 / 453), 2) . ' lbs </li><br />';
        }
        if ($nbinvite >= 16 && $nbinvite <= 20) {

            echo  '<li class="text-center">' . $ingredients . ' : ' . number_format(($poidsG * 4  / 453), 2) .  ' lbs </li><br />';
        }
    }
}

function nbCalorie($nbinvite)
{
    $nbkcal = 120 * $nbinvite;
    echo '<p class = "text-center">' . $nbkcal . ' kcal au total </p>';
}
function RandomDiscussion()
{
    $niveauAlerte = [
        0 => "J'ai trop mangé, je vais bien dormir ce soir !",
        1 => "Mamie fais mieux les crêpes que toi...",
        2 => "C'était pas si mal quand Lex Luthor était président",
        3 => "Pays de Galles indépendant !",
        4 => "Je suis ton père",
        5 => "T'es sûr que ce sont des crêpes ?! *Blurp*"
    ];
    $alerte = $niveauAlerte[mt_rand(0, count($niveauAlerte) - 1)];
    echo '<p class="text-center ">' . $alerte . '</p>';
}
