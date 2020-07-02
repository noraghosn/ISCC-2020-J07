<?php

    $panier=array (
        array ('Tableau 1: T-shirt rouge',15.50, 5),
        array ('Tableau 2: T-shirt vert', 15.50, 6),
        array ('Tableau 3: T-shirt argent', 15.50, 8),
        array ('Tableau 4: Short bleu', 16.50, 5),
        array ('Tableau 5: Short vert', 19.99 , 5),
        array ('Tableau 6: Veste argent', 19.99, 10),
        array ('Tableau 7: Veste argent', 35 , 3));

    function afficher_panier($panier)
    {
        foreach ($panier as $intitulé => $détails)
        {
            echo '<ul>','<li>' .$intitulé . ':' . $détails .'</li>,</ul>';
        }
    }

    function calculer_total_panier($panier)
    {
        foreach
        $total= $total + $détails;
        return $total;
    }

    ?>