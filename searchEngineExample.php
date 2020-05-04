<?php
/**
 * Created by Luc BOBO.
 * User: b17025519
 * Date: 09/10/2018
 * Time: 10:49
 */

include "../Vue/usefulFunction.php";
include "../Vue/ShowRecette.php";
require_once "../Modele/RequeteRecette.php";
require_once "../Modele/secureInput.php";
require_once "../Modele/RequeteTheme.php";

session_start();

$mots = $_POST['criteres']; // mots à rechercher
$reqTool = new RequeteRecette();
$reqToolT = new RequeteTheme();
$current = $reqToolT->getCurrent();
$cssArray = explode('---', $current->getStyleParams());
//Si aucun mot n'est rentré, on demande un mot clé
if (($mots == ""))
{
    start_page('Résultats');
    echo '<p>Veuillez entrer un mot clé s\'il vous plaît !</p>';
}
else
{
    $reqTool = new RequeteRecette();
    $resultats = $reqTool->search($mots);
    for ($i = 0; $i< count($resultats); $i++) {
        if ((($resultats[$i]->getStatut() == 'Cachée') || ($resultats[$i]->getStatut() == 'Privée')) && !(isset($_SESSION['compteObj'])))
        {
            unset($resultats[$i]);
            continue;
        }
        if (($resultats[$i]->getStatut() == 'Privée') && ($_SESSION['login'] != 'administrateur'))
        {
            if ($_SESSION['username'] != $resultats[$i]->getAuteur())
                unset($resultats[$i]);
        }
    }
    array_values($resultats);
    $Nombre = count($resultats);

    //Si aucun résultat n'est renvoyé, on informe l'utilisateur
    if ($Nombre == 0)
    {
        start_page('Aucun résultat trouvé');
        showResult("Aucun résultat ne correspond à votre recherche");
    }
    else
    {
        start_page($title);

        // Si un résultat, orthographe au singulier
        if ($Nombre == 1)
            showResult("1 recette trouvée");
        // Sinon au pluriel
        else
            showResult($Nombre. " recettes trouvées");

        // On affiche la liste de recettes
        echo '<div class="form">';
        foreach ($resultats as $row)
        {
            showRecetteList($row, $cssArray[5]);
        }
        echo '</div>' . PHP_EOL;
    }
}
