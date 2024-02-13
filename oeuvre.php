<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php
    include('includes/header.php');
    include('oeuvres.php');

    //Récupère la valeur de l'ID depuis les paramètres de l'URL
    $Url = $_GET['id'];

    ?>
    <main>

        <?php

    //Vérifie si une oeuvre correspondante a été trouvée
        $oeuvreExiste = false; 
    
    //Parcourt le tableau des $oeuvres
        foreach ($oeuvres as $oeuvre) { 

    //Vérifie si l'œuvre a une clé 'id' et si elle correspond à l'id dans l'URL
            if (array_key_exists('id', $oeuvre) && $oeuvre['id'] == $Url) {
                $oeuvreExiste = true; //une oeuvre a été trouvée
                ?>

            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <?php echo $oeuvre['image']; ?>
                </div>

                <div id="contenu-oeuvre">
                    <h1><?php echo $oeuvre['title']; ?></h1>
                    <p><?php echo $oeuvre['description']; ?></p>
                    <p><?php echo $oeuvre['description-complete']; ?></p>
                </div>
            </article>
        
            <?php 
        }
    }

    // Vérifie si aucune œuvre correspondante n'a été trouvée
        if (!$oeuvreExiste) {        
            echo "Aucune oeuvre n'a été trouvée.";
        } ?>

    </main>

    <?php include('includes/footer.php'); ?>

</body>
</html>