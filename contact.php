<?php
include "assets/php/sendmail.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Victor Nardella - Contact</title>
    <?php include 'assets/php/head.php' ?>
    <meta name="description" content="Victor Nardella - Développeur Fullstack à la recherche d'alternance. Je développe des sites web et logiciels à partir du cahier des charges jusqu'à la mise en ligne ou en service.">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
</head>

<body>
    <?php include 'assets/php/navbar.php'; ?>
    <section class="introduction">
        <div class="bg_titre_page">
            <h1>Nardella Victor</h1>
            <h2>Bienvenue sur mon Portfolio<br></h2>
            <span>Contact<span>
        </div>
    </section>
    <main class="main_contact">
        <section class="titre_contact">
            <h1>Pour me contacter</h1>
            <h2>Veuillez remplir le formulaire</h2>
            <div class="line_contact"></div>
        </section>
        <form method="POST" id="demo-form" action="assets/php/sendmail.php">
            <section class="form_contact">
                <div>
                    <input type="text" name="nom" placeholder="Nom" value="<?php if (isset($nom)) echo $nom; ?>">
                    <input type="text" name="prenom" placeholder="Prénom" value="<?php if (isset($prenom)) echo $prenom; ?>">
                    <input type="text" name="email" placeholder="Adresse email" value="<?php if (isset($email)) echo $email; ?>">
                    <input type="text" name="tel" placeholder="Téléphone (facultatif)" value="<?php if (isset($tel)) echo $tel; ?>">
                </div>
                <textarea name="message" placeholder="Message"><?php if (isset($message)) echo $message; ?></textarea>
            </section>
            <button type="submit" class="submit" data-sitekey="6LcgwqYeAAAAAPwON_poX7cRt_geTdAPMuCMXhoB" data-callback='onSubmit' data-action='submit' name="envoyer">Envoyer</button>
            <p>
                <?php
                if (isset($msg)) echo $msg;
                if (isset($err)) echo '<font color="#DF0000">' . $err . '</font>';
                ?>
            </p>
        </form>
    </main>
    <?php include 'assets/php/footer.php' ?>


    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>