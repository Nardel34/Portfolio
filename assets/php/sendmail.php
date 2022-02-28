<?php
if (isset($_POST['envoyer'])) {

    $destinataire = "mail.portfolio.me@gmail.com";
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $message = htmlspecialchars($_POST['message']);
    $message_mail = "Nom : " . $nom . "
    
    Prénom : " . $prenom . "
    
    Email : " . $email . "
    
    Téléphone : " . $tel . "
    
    Message : " . $message;

    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['message'])) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $secret = "6LcgwqYeAAAAAJyQlvh20mC2rU0oa2NU11r_uS8H";
            $response = htmlspecialchars($_POST['g-recaptcha-response']);
            $remoteIP = $_SERVER['REMOTE_ADDR'];
            $request = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteIP";
            $uncode = json_decode(file_get_contents($request));

            if ($uncode['success']) {
                mail($destinataire, "Contact Portfolio", $message_mail);
                $msg = "Votre message a bien été envoyé";
            }
        } else {
            $err = "L'adresse mail n'est pas valide";
            $email = null;
        }
    } else $err = "Veuiller remplir tous les champs";
}
