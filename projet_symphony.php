<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Victor Nardella - Projets</title>
    <?php include 'assets/php/head.php' ?>
    <meta name="description" content="Victor Nardella - Développeur Fullstack à la recherche d'alternance. Je développe des sites web et logiciels à partir du cahier des charges jusqu'à la mise en ligne ou en service.">
    <link rel="stylesheet" type="text/css" href="assets/css/portfolio.css">
</head>

<body>
    <?php include 'assets/php/navbar.php'; ?>
    <section class="introduction">
        <div class="bg_titre_page">
            <h1>Nardella Victor</h1>
            <h2>Bienvenue sur mon Portfolio<br></h2>
            <span>Origami Cloud<span>
        </div>
    </section>
    <section class="navigation_projets">
        <a href="projet_portfolio.php">Portfolio</a>
        <a href="projet_reservation.php">Le petit soliste</a>
        <a href="projet_bea.php">Gestion d'Audit</a>
        <a href="projet_symphony.php" class="projet_selectionnee">Origami Cloud</a>
    </section>
    <main class="main_projet">
        <img src="assets/img/origamicloud.jpg" alt="work_on_progress">
        <div>
            <h1>Origami Cloud</h1>
            <h2>Application Web de stockage (Cloud)</h2>
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
                    2022<br><br>
                    Cabinet Origami<br><br>
                    Application Web<br><br>
                    Symfony, Jquery, Ajax<br><br><br>
                    <a href="https://origamicloud.victor-nardella.fr" rel="noopener" target="_blank">origamicloud.fr</a><br><br>
                    Non disponible
                </p>
            </div>
            <div class="line_projet"></div>
        </div>
    </main>
    <?php include 'assets/php/footer.php' ?>
</body>


</html>