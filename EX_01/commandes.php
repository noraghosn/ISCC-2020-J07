<?php

$historique_commandes= array ('5.49','9.99','5.49','15.99','25');

foreach ($historique_commandes as $éléments)
{
    echo '<p>'.$éléments. '</p>';
}

function afficher_commandes ($historique_commandes)
{
    foreach ($historique_commandes as $éléments)
    {
    echo "Une commande de $éléments a été reçue.";
    echo "<br>";
    $total= $total + $éléments;
    }
        echo "Le total des commandes est de $total euros.";
    return;
}
afficher_commandes($historique_commandes);

?>