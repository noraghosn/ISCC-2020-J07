<?php

    $panier=array (
        array (' T-shirt rouge',15.50, 5),
        array (' T-shirt vert', 15.50, 6),
        array (' T-shirt argent', 15.50, 8),
        array (' Short bleu', 16.50, 5),
        array (' Short vert', 19.99 , 5),
        array (' Veste argent', 19.99, 10),
        array (' Veste argent', 35 , 3));

    function afficher_panier($panier)
    {
        foreach ($panier as $intitulé => $détails)
        {
            echo '
                <ul>
                    <li>'.$détails[0]. '</li>
                    <li>'.$détails[1]. '</li>
                    <li>'.$détails[2]. '</li>
                </ul>';
        }
    }
    afficher_panier($panier);

    function calculer_total_panier($panier)
    {
        foreach ($panier as $intitulé=>$prix)
        {
            $total=$total + $prix[1] * $prix[2];
        }
        echo "<p> Le prix total du panier est $total </p>.";
        return ;
    }

    calculer_total_panier($panier)

    ?>