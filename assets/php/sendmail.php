<?php

use ReCaptcha\ReCaptcha;

require('vendor/autoload.php');

if (isset($_POST['envoyer'])) {

    $destinataire = "victor.nardel@gmail.com";
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

            // $recaptcha = new \ReCaptcha\ReCaptcha("6LduKqceAAAAADXqW8uRSyWbuER9c3YDW-X69aIL");
            // $response = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
            $post = [
                'secret' => "6LduKqceAAAAADXqW8uRSyWbuER9c3YDW-X69aIL",
                'response' => $_POST['g-recaptcha-response'],
                'remoteip'   => $_SERVER['REMOTE_ADDR'],
            ];

            $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            $response = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($response, true);
            if (isset($response['success']) && $response['success'] == true) {
                mail($destinataire, "Contact Portfolio", $message_mail, 'noreply@victor-nardella.fr');
                $msg = "Votre message a bien été envoyé";
            } else {
                $err = "Le message ne peut pas être envoyé<br>Veuillez contacter l'administrateur";
            }
        } else {
            $err = "L'adresse mail n'est pas valide";
            $email = null;
        }
    } else $err = "Veuiller remplir tous les champs";
}
