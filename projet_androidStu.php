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
            <span>EM Mobile<span>
        </div>
    </section>
    <section class="navigation_projets">
        <a href="projet_portfolio.php">Portfolio</a>
        <a href="projet_reservation.php">Le petit soliste</a>
        <a href="projet_bea.php">Gestion d'audits</a>
        <a href="projet_symphony.php">Origami Cloud</a>
        <a href="projet_ap3.php">Event Manager</a>
        <a href="projet_androidStu.php" class="projet_selectionnee">EM Mobile</a>
    </section>
    <main class="main_projet">
        <img src="assets/img/mobile.jpg" class="img_mobile" alt="mobile">
        <div>
            <h1>Event Manager Mobile</h1>
            <h2>Gestionnaire d'évènements</h2>
            <div class="line_projet"></div>
            <div class="description_projet">
                <p>
                    <strong>Année</strong><br><br>
                    <strong>Client</strong><br><br>
                    <strong>Type</strong><br><br>
                    <strong>Technologies</strong><br><br><br>
                    <strong>Télécharger</strong><br><br>
                    <strong>GitHub</strong>
                </p>
                <p>
                    2022<br><br>
                    Projet personnel<br><br>
                    Android<br><br>
                    Java, XML<br><br><br>
                    Non disponible<br><br>
                    <a href="https://github.com/Nardel34/Event_manager_mobile" target="_blank" rel="noopener">github.com/emmob</a>
                </p>
            </div>
            <div class="line_projet"></div>
        </div>
    </main>
    <?php include 'assets/php/footer.php' ?>
</body>


</html>