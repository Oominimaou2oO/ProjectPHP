<?php

/**
 * Created by PhpStorm.
 * User: julien
 * Date: 29/12/2015
 * Time: 12:00
 */
class Mail
{
    public static function sendVerificationMail($user, $email, $key)
    {
        $subject = "Activation de votre compte Aaron";
        $head = "From : inscription@aaron.fr";

        $message = "Bienvenue sur Aaron,

        Pour activer votre compte, merci de cliquer sur le lien suivant ou de le copier/coller dans votre navigateur internet.

        'cuscom.fr/aaron/mailValidation.php?user=$user&key=$key'

        Ce message est automatique, merci de ne pas y repondre.

        L'equipe AaronProject";

        mail($email, $subject, $message, $head);
    }

    public static function sendWelcomingMail($email)
    {
        $subject = "Activation de votre compte Aaron";
        $head = "From : welcome@aaron.fr";

        $message = "Merci d'avoir validé votre inscription !

        Vous pouvez désormais suivre vos actualités à partir de votre page personnelle.

        Ce message est automatique, merci de ne pas y repondre.

        L'equipe AaronProject";

        mail($email, $subject, $message, $head);
    }

    public static function sendResetMail($email, $user)
    {
        $subject = "Reinitialisation de votre mot de passe Aaron";
        $head = "From : reset@aaron.fr";

        $message = "Une demande de réinitialisation de mot de passe vient d'être effectuée.
        Supprimez immédiatement de message si vous n'en être pas l'auteur.

        Sinon, merci de cliquer sur le lien suivant ou de le copier/coller dans votre navigateur internet.

        'cuscom.fr/aaron/reset.php?user=$user';


        Ce message est automatique, merci de ne pas y repondre.

        L'equipe AaronProject";

        mail($email, $subject, $message, $head);
    }

}