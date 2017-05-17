<?php
	

	$to = "guillaume.amortila@me.com";

	$subject = "mail-confirm test";

	$frontiere = md5(uniqid(mt_rand()));

	$headers = "From:La famille <lafamille@gmil.com>"."\n";
	$headers .= "Return-Path: <guigz@g.com>"."\n";
	$headers .= "MIME-version: 1.0"."\n";
	$headers .= "Content-Type: multipart/mixed; boundary='".$frontiere."'";


	// MESSAGE
	// MESSAGE PLAIN TEXT

	$message = "Voici le message en MULTIPART/MIXED\n";

	$message_txt = "Voici le message en TEXT/PLAIN";

	$message .= '--' .$frontiere."\n";
	$message .= 'Content-Type: text/plain; charset="iso-8859-1"'."\n";
	$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
	$message .= $message_txt."\n\n";
	
	// MESSAGE HTML

	$message_html =
		"<html>
			<body>
				<h1>TEST - ENVOI DE MAIL</h1><br>
				<div style='background-color: blue; color: white;'>Coucou c'est moi le bleu</div><br>
				<div style='background-color: orange; color: white;'>Coucou c'est moi l'orange</div>
			</body>
		</html>";

	$message .= '--' . $frontiere."\n";
	$message .= 'Content-Type: text/html; charset="iso-8859-1"'."\n";
	$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
	$message .= $message_html."\n\n";

	// PIÈCE JOINTE

	$message .= '--' .$frontiere."\n";
	$message .= 'Content-Type: image/jpeg; name="image.jpg"'."\n";
	$message .= 'Content-Transfer-Encoding: base64'."\n";
	$message .= 'Content-Disposition:attachement; filename="image.jpg"'."\n\n";
	$message .= chunk_split(base64_encode(file_get_contents('image.jpg')))."\n";
	

	mail($to, $subject, $message, $headers);




