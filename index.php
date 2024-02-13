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

    <!-- Inclut le contenu 'header.php' -->
    <?php include ('includes/header.php'); 
    ?>

    <!-- Inclut le contenu 'oeuvres.php' -->
    <?php include ("oeuvres.php"); 
    ?>

    <main>

    <!-- Définit une section avec "l'id" -->
        <div id="liste-oeuvres">

    <!-- Débute la boucle 'foreach' pour chaque élément de la variable '$oeuvres' -->
            <?php foreach ($oeuvres as $oeuvre) : ?>

                <article class="oeuvre">

    <!-- Crée un lien vers la page 'oeuvre.php' avec l'identifiant de l'oeuvre -->
                    <a href="oeuvre.php?id=<?php echo $oeuvre ['id']; ?>">

                        <?php echo $oeuvre ['image']; ?>
                        <h2><?php echo $oeuvre ['title']; ?></h2>
                        <p><?php echo $oeuvre ['description']; ?></p>
                    </a>                
                </article>

    <!-- Termine la boucle -->
            <?php endforeach ?>
            
        </div>
    </main>
    <?php include ('includes/footer.php'); ?>
</body>
</html>