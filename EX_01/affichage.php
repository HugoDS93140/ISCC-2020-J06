<html>
<head> 
    <title>Ex 1</title>
    </head>
    
    <h1> 
    <?php
        function affichage ($nom_produit)
        {echo "fiche produit : $nom_produit"};
        ?>
    
    </h1>
    <p> <?php
        function affichage ($couleur, $prix )
        {echo "couleur : $couleur, prix : $prix"};
        ?>
    </p>
    <p> <?php
        function affichage($nom_produit,$couleur,$prix,$disponible)
        if ($disponible= true)
        {echo "$nom_produit,$couleur,$prix"};
        if ($disponible= false){echo "le produit $nom_produit n'est plus disponible"};
        ?>
            </p>
                
    

</html>