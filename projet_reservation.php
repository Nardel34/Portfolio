<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Victor Nardella - Projets</title>
    <?php include 'assets/php/head.php' ?>
    <meta name="description" content="Victor Nardella - Développeur web à la recherche d'alternance. Je design et développe des sites web à partir du cahier des charges jusqu'à la mise en ligne.">
    <link rel="stylesheet" type="text/css" href="assets/css/portfolio.css">
</head>

<body>
    <?php include 'assets/php/navbar.php'; ?>
    <section class="introduction">
        <div class="bg_titre_page">
            <h1>Nardella Victor</h1>
            <h2>Bienvenue sur mon Portfolio<br></h2>
            <span>Le petit Soliste<span>
        </div>
    </section>
    <section class="navigation_projets">
        <a href="projet_portfolio.php">Portfolio</a>
        <a href="projet_reservation.php" class="projet_selectionnee">Le petit soliste</a>
        <a href="projet_bea.php">Gestion d'Audit</a>
        <a href="projet_symphony.php">Origami Cloud</a>
    </section>
    <main class="main_projet">
        <img src="assets/img/le_petit_soliste_img.jpg" alt="petit_soliste_img">
        <div>
            <h1>Le petit Soliste</h1>
            <h2>Réservations de cours de violon</h2>
            <div class="line_projet"></div>
            <div class="description_projet">
                <p>
                    <strong>Année</strong><br><br>
                    <strong>Client</strong><br><br>
                    <strong>Type</strong><br><br>
                    <strong>Technologies</strong><br><br><br>
                    <strong>Lien</strong><br><br>
                    <strong>GitHub</strong>
                </p>
                <p>
                    2020<br><br>
                    Projet personnel<br><br>
                    Web<br><br>
                    JavaScript, PHP<br><br><br>
                    <a href="https://lepetitsoliste.victor-nardella.fr" target="_blank" rel="noopener">Le_petit_soliste</a><br><br>
                    Non disponible
                </p>
            </div>
            <div class="line_projet"></div>
        </div>
    </main>
    <?php include 'assets/php/footer.php' ?>
</body>


</html>