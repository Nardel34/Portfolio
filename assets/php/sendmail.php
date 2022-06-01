<?php
// require('vendor/autoload.php');

// use \ReCaptcha\ReCaptcha;

if (isset($_POST['envoyer'])) {

    $destinataire = "victor.nardel@gmail.com";
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $message = htmlspecialchars($_POST['message']);
    $header = [
        'From' => "noreply@victor-nardella.fr",
        'content-type' => "text/html; charset=utf-8"
    ];
    $message_mail =
        "Nom : " . $nom . "<br><br>
        Prénom : " . $prenom . "<br><br>
        Email : " . $email . "<br><br>
        Téléphone : " . $tel . "<br><br>
        Message : " . $message;

    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['message'])) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Doc officiel de google mais renvoie toujours "false"
            // $recaptcha = new ReCaptcha("6LduKqceAAAAADXqW8uRSyWbuER9c3YDW-X69aIL");
            // $response = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

            $post = [
                'secret' => "6LduKqceAAAAADXqW8uRSyWbuER9c3YDW-X69aIL",
                'response' => $_POST['g-recaptcha-response'],
                'remoteip'   => $_SERVER['REMOTE_ADDR'],
            ];

            $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            $output = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($output, true);
            if (isset($response['success']) && $response['success'] == true) {
                mail($destinataire, "Contact Portfolio", $message_mail, $header);
                $msg = "Votre message a bien été envoyé";
                $email = null;
                $nom = null;
                $prenom = null;
                $tel = null;
                $message = null;
            } else {
                $err = "Veuillez cocher le ReCAPTCHA ou réessayé plus tard";
            }
        } else {
            $err = "L'adresse mail n'est pas valide";
            $email = null;
        }
    } else $err = "Veuiller remplir tous les champs";
}
