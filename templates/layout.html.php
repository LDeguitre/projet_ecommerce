<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/d2fd2b5b87.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"> // link pour les icones fontawesome
    <link rel="stylesheet" href="css/style.php">
    <title>e-commerce - <?= $pageTitle ?></title>
</head>

<body>
    <header>
        <div class="content-wrapper">
            <h1>Projet e-commerce</h1>
            <nav>
                <a href="index.php?controller=product&task=recently_added">Accueil</a>
                <a href="index.php?controller=product&task=index">Produits</a>
            </nav>
            <div class="link-icons">
                <?php if(empty($_SESSION['logged_in'])): ?> // Affiche le lien "S'identifier" si l'utilisateur n'est pas connecté

                    <a href="index.php?controller=user&task=open&path=user/login&pageTitle=Connexion" class="login"/>S'identifier</a>

                <?php else: ?> // Affiche le lien "Deconnexion" si l'utilisateur est connecté

                    <a href="index.php?controller=user&task=logout">Deconnexion</a>
                    <i class="fas fa-user"></i> // Icone utilisateur

                <?php endif ?>

                <a href="index.php?controller=user&task=show_cart">
                    <span><?=$num_items_in_cart?></span> // Affichage du nombre d'articles présent dans le panier
                    <i class="fas fa-shopping-cart"></i> // Icone panier
                </a>
            </div>
        </div>
    </header>
    <main>

    <?= $pageContent ?>

    </main>
    <footer>
        <?php $year = date('Y'); ?> // Année actuelle
        <div class="content-wrapper">
            <p>&copy; <?=$year?>, Projet e-commerce</p>
        </div>
    </footer>
</body>

</html>