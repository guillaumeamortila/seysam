<?php

/***********************
 *
 * $mail_exp =
 * $name_exp =
 * $mail_replyto =
 * $mail_dest =
 * $bcc =
 * $objet =
 * $texte =
 * $html =
 * $fichiers = pieces jointes
 *
************************/

function send_mail($mail_exp, $name_exp, $mail_replyto, $mail_dest, $bcc, $objet, $texte, $html, $fichiers)
{

    // Générer la frontiere
    $frontiere = md5(uniqid(mt_rand()));

    //Headers du mail
    $header = 'From : "' . $name_exp . '" <' . $mail_exp . '>' . "\n";
    $header .= 'Return-Path: <' . $mail_replyto . '>' . "\n";
    $header .= 'MIME-Version: 1.0' . "\n";
    if ($bcc != '') {
        $header .= 'Bcc: ' . $bcc . "\n";
    }
    $header .= 'Content-Type : multipart/mixed; boundary="'.$frontiere.'"' . "\n";
    $header .= 'X-Priority: 1' . "\n";
    $header .= 'X-MSMail-Priority: High' . "\n\n";

    // Debut du message
    $message = '';

    // Message texte brut
    if($texte != '') {
        $message .= '--' . $frontiere . "\n";
        $message .= 'Content-Type: texte/plain; charset="utf-8"' . "\n";
        $message .= 'Content-Transfert-Encoding: 8bit' . "\n\n";
        $message .= $texte . "\n\n";
    }

    // Message texte html
    if($html != '') {
        $message .= '--' .$frontiere."\n";
        $message .= 'Content-Type: text/html; charset="utf-8"'."\n";
        $message .= 'Content-Transfert-Encoding: 8bit'."\n\n";
        $message .= $html."\n\n";

    }

    // Pieces jointes
    if($fichiers != '') {

        $tab_fichiers = explode(';', $fichiers);
        $nb_fichiers = count($tab_fichiers);

        for($i = 0; $i < $nb_fichiers; $i++) {
            $message .= '--' . $frontiere . "\n";
            $message .= 'Content-Type: image/jpeg; name="'. $tab_fichiers[$i] . '"' . "\n";
            $message .= 'Content-Transfert-Encoding: base64'."\n";
            $message .= 'Content-Disposition:attachement; filename="' . $tab_fichiers[$i] . '"' . "\n\n";
            $message .= chunk_split(base64_encode(file_get_contents($tab_fichiers[$i])))."\n\n";
        }
    }

    // Envoi du mail
    return mail($mail_dest, $objet, $message, $header);
}