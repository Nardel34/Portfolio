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
            <span>Gestion d'audits (Concours BEA Informatique)<span>
        </div>
    </section>
    <section class="navigation_projets">
        <a href="projet_portfolio.php">Portfolio</a>
        <a href="projet_reservation.php">Le petit soliste</a>
        <a href="projet_bea.php" class="projet_selectionnee">Gestion d'audits</a>
        <a href="projet_symphony.php">Origami Cloud</a>
        <a href="projet_ap3.php">Event Manager</a>
        <a href="projet_androidStu.php">EM Mobile</a>
    </section>
    <main class="main_projet">
        <img src="assets/img/concours.jpg" alt="concours">
        <div>
            <h1>Concours BEA Informatique</h1>
            <h2>Gestion d'audits et mise en page avec Adobe Illustrator</h2>
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
                    2021<br><br>
                    Concours<br><br>
                    Logiciel<br><br>
                    C#, Librairy de lecture Json<br><br><br>
                    Non disponible<br><br>
                    <a href="https://github.com/Nardel34/Gestion_Audits" target="_blank" rel="noopener">github.com/Gestion_Audits</a>
                </p>
            </div>
            <div class="line_projet"></div>
        </div>
    </main>
    <?php include 'assets/php/footer.php' ?>
</body>


</html>